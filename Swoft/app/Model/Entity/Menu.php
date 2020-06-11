<?php declare(strict_types=1);


namespace App\Model\Entity;

use Swoft\Db\Annotation\Mapping\Column;
use Swoft\Db\Annotation\Mapping\Entity;
use Swoft\Db\Annotation\Mapping\Id;
use Swoft\Db\Eloquent\Model;


/**
 * 后台菜单
 * Class Menu
 *
 * @since 2.0
 *
 * @Entity(table="menu")
 */
class Menu extends Model
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
     * @var int
     */
    private $pid;

    /**
     * 
     *
     * @Column()
     *
     * @var string
     */
    private $name;

    /**
     * 
     *
     * @Column()
     *
     * @var string
     */
    private $url;

    /**
     * 
     *
     * @Column()
     *
     * @var int
     */
    private $sort;

    /**
     * 可见性, 0 如果url没有权限则不可见, 1 无要求
     *
     * @Column()
     *
     * @var int
     */
    private $access;

    /**
     * 0  可见, 1 不可见
     *
     * @Column()
     *
     * @var int
     */
    private $hide;

    /**
     * 
     *
     * @Column()
     *
     * @var string
     */
    private $icon;


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
     * @param int $pid
     *
     * @return self
     */
    public function setPid(int $pid): self
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param int $sort
     *
     * @return self
     */
    public function setSort(int $sort): self
    {
        $this->sort = $sort;

        return $this;
    }

    /**
     * @param int $access
     *
     * @return self
     */
    public function setAccess(int $access): self
    {
        $this->access = $access;

        return $this;
    }

    /**
     * @param int $hide
     *
     * @return self
     */
    public function setHide(int $hide): self
    {
        $this->hide = $hide;

        return $this;
    }

    /**
     * @param string $icon
     *
     * @return self
     */
    public function setIcon(string $icon): self
    {
        $this->icon = $icon;

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
    public function getPid(): ?int
    {
        return $this->pid;
    }

    /**
     * @return string
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return int
     */
    public function getSort(): ?int
    {
        return $this->sort;
    }

    /**
     * @return int
     */
    public function getAccess(): ?int
    {
        return $this->access;
    }

    /**
     * @return int
     */
    public function getHide(): ?int
    {
        return $this->hide;
    }

    /**
     * @return string
     */
    public function getIcon(): ?string
    {
        return $this->icon;
    }

}
