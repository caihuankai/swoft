<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 
 * Class Admin
 *
 * @since 2.0
 *
 * @Entity(table="admin")
 */
class Admin extends Model
{
    /**
     * 
     * @Id()
     * @Column()
     *
     * @var int
     */
    private $id;

    /**
     * 
     *
     * @Column()
     *
     * @var string
     */
    private $username;

    /**
     * 
     *
     * @Column(hidden=true)
     *
     * @var string
     */
    private $password;

    /**
     * 
     *
     * @Column()
     *
     * @var string
     */
    private $email;

    /**
     * 
     *
     * @Column(name="group_id", prop="groupId")
     *
     * @var int
     */
    private $groupId;

    /**
     * 
     *
     * @Column(name="menu_id", prop="menuId")
     *
     * @var string|null
     */
    private $menuId;

    /**
     * 
     *
     * @Column(name="last_visit", prop="lastVisit")
     *
     * @var int
     */
    private $lastVisit;

    /**
     * 
     *
     * @Column(name="date_time", prop="dateTime")
     *
     * @var int
     */
    private $dateTime;

    /**
     * 1:正常 0:禁用
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * 
     *
     * @Column(name="key", prop="propertyKey")
     *
     * @var int
     */
    private $propertyKey;

    /**
     * 登陆ip
     *
     * @Column()
     *
     * @var string
     */
    private $ip;

    /**
     * 当天错误登陆次数
     *
     * @Column(name="login_num", prop="loginNum")
     *
     * @var int
     */
    private $loginNum;

    /**
     * 登陆时间
     *
     * @Column(name="login_time", prop="loginTime")
     *
     * @var int
     */
    private $loginTime;

    /**
     * 绑定前台用户(目前评论审核使用)
     *
     * @Column(name="bind_user_id", prop="bindUserId")
     *
     * @var int|null
     */
    private $bindUserId;


    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @param string $username
     *
     * @return self
     */
    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @param int $groupId
     *
     * @return self
     */
    public function setGroupId(int $groupId): self
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * @param string|null $menuId
     *
     * @return self
     */
    public function setMenuId(?string $menuId): self
    {
        $this->menuId = $menuId;

        return $this;
    }

    /**
     * @param int $lastVisit
     *
     * @return self
     */
    public function setLastVisit(int $lastVisit): self
    {
        $this->lastVisit = $lastVisit;

        return $this;
    }

    /**
     * @param int $dateTime
     *
     * @return self
     */
    public function setDateTime(int $dateTime): self
    {
        $this->dateTime = $dateTime;

        return $this;
    }

    /**
     * @param int $status
     *
     * @return self
     */
    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @param int $propertyKey
     *
     * @return self
     */
    public function setPropertyKey(int $propertyKey): self
    {
        $this->propertyKey = $propertyKey;

        return $this;
    }

    /**
     * @param string $ip
     *
     * @return self
     */
    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @param int $loginNum
     *
     * @return self
     */
    public function setLoginNum(int $loginNum): self
    {
        $this->loginNum = $loginNum;

        return $this;
    }

    /**
     * @param int $loginTime
     *
     * @return self
     */
    public function setLoginTime(int $loginTime): self
    {
        $this->loginTime = $loginTime;

        return $this;
    }

    /**
     * @param int|null $bindUserId
     *
     * @return self
     */
    public function setBindUserId(?int $bindUserId): self
    {
        $this->bindUserId = $bindUserId;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getGroupId(): ?int
    {
        return $this->groupId;
    }

    /**
     * @return string|null
     */
    public function getMenuId(): ?string
    {
        return $this->menuId;
    }

    /**
     * @return int
     */
    public function getLastVisit(): ?int
    {
        return $this->lastVisit;
    }

    /**
     * @return int
     */
    public function getDateTime(): ?int
    {
        return $this->dateTime;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function getPropertyKey(): ?int
    {
        return $this->propertyKey;
    }

    /**
     * @return string
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * @return int
     */
    public function getLoginNum(): ?int
    {
        return $this->loginNum;
    }

    /**
     * @return int
     */
    public function getLoginTime(): ?int
    {
        return $this->loginTime;
    }

    /**
     * @return int|null
     */
    public function getBindUserId(): ?int
    {
        return $this->bindUserId;
    }

}
