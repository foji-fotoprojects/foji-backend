<?php


namespace common\models;

use yii\base\Model;

class ChangePasswordForm extends Model
{
    public $currentPassword;
    public $newPassword;
    public $newPasswordRepeat;

    /**
     * @var User
     */
    private $_user;

    /**
     * @param User $user
     * @param array $config
     */
    public function __construct(User $user, $config = [])
    {
        $this->_user = $user;
        parent::__construct($config);
    }

    public function rules()
    {
        return [
            [['currentPassword', 'newPassword', 'newPasswordRepeat'], 'required', 'message' => 'Необходимо заполнить'],
            ['currentPassword', 'validatePassword', 'message' => 'Неверный пароль'],
            [['newPassword', 'newPasswordRepeat'], 'string', 'min' => 6, 'message' => 'Минимум 6 символов'],
            ['newPassword', 'compare', 'compareAttribute' => 'newPasswordRepeat', 'message' => 'Пароли не совпадают'],
        ];
    }

    /**
     * @param string $attribute
     * @param array $params
     */
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if (!$this->_user->validatePassword($this->$attribute)) {
                $this->addError($attribute,'Неверно введен пароль');
            }
        }
    }

    /**
     * @return boolean
     */
    public function setNewPassword()
    {
        if ($this->validate()) {
            $user = $this->_user;
            $user->setPassword($this->newPassword);
            return $user->save();
        } else {
            return false;
        }
    }
}