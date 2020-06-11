<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 管理日志
 * Class LogManage
 *
 * @since 2.0
 *
 * @Entity(table="log_manage")
 */
class LogManage extends Model
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
     * 类型
     *
     * @Column()
     *
     * @var int
     */
    private $type;

    /**
     * 后台用户id
     *
     * @Column(name="admin_id", prop="adminId")
     *
     * @var int
     */
    private $adminId;

    /**
     * 日志时间
     *
     * @Column()
     *
     * @var int
     */
    private $datetime;

    /**
     * 注释
     *
     * @Column()
     *
     * @var string
     */
    private $comment;

    /**
     * 参数
     *
     * @Column()
     *
     * @var string
     */
    private $param;

    /**
     * 访问入口
     *
     * @Column()
     *
     * @var string
     */
    private $action;

    /**
     * 状态, 0 成功, 1 失败
     *
     * @Column()
     *
     * @var int
     */
    private $status;

    /**
     * ip地址
     *
     * @Column()
     *
     * @var string
     */
    private $ip;


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
     * @param int $type
     *
     * @return self
     */
    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param int $adminId
     *
     * @return self
     */
    public function setAdminId(int $adminId): self
    {
        $this->adminId = $adminId;

        return $this;
    }

    /**
     * @param int $datetime
     *
     * @return self
     */
    public function setDatetime(int $datetime): self
    {
        $this->datetime = $datetime;

        return $this;
    }

    /**
     * @param string $comment
     *
     * @return self
     */
    public function setComment(string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @param string $param
     *
     * @return self
     */
    public function setParam(string $param): self
    {
        $this->param = $param;

        return $this;
    }

    /**
     * @param string $action
     *
     * @return self
     */
    public function setAction(string $action): self
    {
        $this->action = $action;

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
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getType(): ?int
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getAdminId(): ?int
    {
        return $this->adminId;
    }

    /**
     * @return int
     */
    public function getDatetime(): ?int
    {
        return $this->datetime;
    }

    /**
     * @return string
     */
    public function getComment(): ?string
    {
        return $this->comment;
    }

    /**
     * @return string
     */
    public function getParam(): ?string
    {
        return $this->param;
    }

    /**
     * @return string
     */
    public function getAction(): ?string
    {
        return $this->action;
    }

    /**
     * @return int
     */
    public function getStatus(): ?int
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

}
