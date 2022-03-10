<?php declare(strict_types=1);
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Admin\Struct;

use JMS\Serializer\Annotation\{Accessor, SerializedName, Type, XmlAttribute};

/**
 * IdStatus struct class
 *
 * @package    Zimbra
 * @subpackage Admin
 * @category   Struct
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013-present by Nguyen Van Nguyen.
 */
class IdStatus
{
    /**
     * @Accessor(getter="getId", setter="setId")
     * @SerializedName("id")
     * @Type("string")
     * @XmlAttribute
     */
    private $id;

    /**
     * @Accessor(getter="getStatus", setter="setStatus")
     * @SerializedName("status")
     * @Type("string")
     * @XmlAttribute
     */
    private $status;

    /**
     * Constructor method for IdStatus
     * @param  string $id
     * @param  string $status
     * @return self
     */
    public function __construct(?string $id = NULL, ?string $status = NULL)
    {
        if (NULL !== $id) {
            $this->setId($id);
        }
        if (NULL !== $status) {
            $this->setStatus($status);
        }
    }

    /**
     * Gets Zimbra ID
     *
     * @return string
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets Zimbra ID
     *
     * @param  string $id
     * @return self
     */
    public function setId(string $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets status
     *
     * @param  string $status
     * @return self
     */
    public function setStatus(string $status): self
    {
        $this->status = $status;
        return $this;
    }
}
