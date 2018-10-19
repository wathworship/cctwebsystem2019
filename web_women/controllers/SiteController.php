<?php
namespace web_women\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use web_sdsu\models\PasswordResetRequestForm;
use web_sdsu\models\ResetPasswordForm;
use web_sdsu\models\SignupForm;
use web_sdsu\models\ContactForm;
use web_sdsu\models\Tcontact;
use web_sdsu\models\Tjournal;
use web_sdsu\models\Uploads;
use web_sdsu\models\Tnew;
use web_sdsu\models\Banner;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'actions' => ['signup'],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    public function actionIndex()
    {
        $map = Tcontact::find()->where('id_type=8')->one();
        $banner = Banner::find()->where('unit=8')->one();
        //$article = Tjournal::find()->where('unit=8')->andWhere('d_journal=2')->orderBy('id DESC')->limit(4)->all();
        $article1 = Tjournal::find()->where('unit=8')->andWhere('d_journal=2')->andWhere('id=9')->one();
        $article2 = Tjournal::find()->where('unit=8')->andWhere('d_journal=2')->andWhere('id=7')->one();
        $article3 = Tjournal::find()->where('unit=8')->andWhere('d_journal=2')->andWhere('id=5')->one();
        $article4 = Tjournal::find()->where('unit=8')->andWhere('d_journal=2')->andWhere('id=3')->one();
        $news = Tnew::find()->where('newtype_id=9')->orderBy('id DESC')->limit(4)->all();
        return $this->render('index',[
            'map' => $map,
            'banner' => $banner,
            'article1' => $article1,
            'article2' => $article2,
            'article3' => $article3,
            'article4' => $article4,
            'news' => $news,
        ]);
    }

    /**
     * Logs in a user.
     *
     * @return mixed
     */
    /*public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }*/

    /**
     * Logs out the current user.
     *
     * @return mixed
     */
    /*public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }*/

    /**
     * Displays contact page.
     *
     * @return mixed
     */
    /*public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail(Yii::$app->params['adminEmail'])) {
                Yii::$app->session->setFlash('success', 'Thank you for contacting us. We will respond to you as soon as possible.');
            } else {
                Yii::$app->session->setFlash('error', 'There was an error sending your message.');
            }

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }*/

    /**
     * Displays about page.
     *
     * @return mixed
     */
    /*public function actionAbout()
    {
        return $this->render('about');
    }*/

    /**
     * Signs user up.
     *
     * @return mixed
     */
    /*public function actionSignup()
    {
        $model = new SignupForm();
        if ($model->load(Yii::$app->request->post())) {
            if ($user = $model->signup()) {
                if (Yii::$app->getUser()->login($user)) {
                    return $this->goHome();
                }
            }
        }

        return $this->render('signup', [
            'model' => $model,
        ]);
    }*/

    /**
     * Requests password reset.
     *
     * @return mixed
     */
    /*public function actionRequestPasswordReset()
    {
        $model = new PasswordResetRequestForm();
        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            if ($model->sendEmail()) {
                Yii::$app->session->setFlash('success', 'Check your email for further instructions.');

                return $this->goHome();
            } else {
                Yii::$app->session->setFlash('error', 'Sorry, we are unable to reset password for the provided email address.');
            }
        }

        return $this->render('requestPasswordResetToken', [
            'model' => $model,
        ]);
    }*/

    /**
     * Resets password.
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    /*public function actionResetPassword($token)
    {
        try {
            $model = new ResetPasswordForm($token);
        } catch (InvalidParamException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }

        if ($model->load(Yii::$app->request->post()) && $model->validate() && $model->resetPassword()) {
            Yii::$app->session->setFlash('success', 'New password saved.');

            return $this->goHome();
        }

        return $this->render('resetPassword', [
            'model' => $model,
        ]);
    }*/

    public function actionCalendar()
    {
        return $this->render('calendar');
    }

    public function actionDonate()
    {
        return $this->render('donate');
    }
}
