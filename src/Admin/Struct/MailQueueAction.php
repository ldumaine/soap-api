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

use JMS\Serializer\Annotation\{Accessor, AccessType, SerializedName, Type, XmlAttribute, XmlElement, XmlRoot};
use Zimbra\Enum\{QueueAction, QueueActionBy};

/**
 * MailQueueAction struct class
 *
 * @package    Zimbra
 * @subpackage Admin
 * @category   Struct
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013-present by Nguyen Van Nguyen.
 * @AccessType("public_method")
 * @XmlRoot(name="action")
 */
class MailQueueAction
{
    /**
     * @Accessor(getter="getQuery", setter="setQuery")
     * @SerializedName("query")
     * @Type("Zimbra\Admin\Struct\QueueQuery")
     * @XmlElement
     */
    private $query;

    /**
     * @Accessor(getter="getOp", setter="setOp")
     * @SerializedName("op")
     * @Type("Zimbra\Enum\QueueAction")
     * @XmlAttribute
     */
    private $op;

    /**
     * @Accessor(getter="getBy", setter="setBy")
     * @SerializedName("by")
     * @Type("Zimbra\Enum\QueueActionBy")
     * @XmlAttribute
     */
    private $by;

    /**
     * Constructor method for MailQueueAction
     * @param  QueueQuery $query Query
     * @param  QueueAction $op Operation
     * @param  QueueActionBy $by By selector
     * @return self
     */
    public function __construct(QueueQuery $query, QueueAction $op, QueueActionBy $by)
    {
        $this->setQuery($query)
             ->setOp($op)
             ->setBy($by);
    }

    /**
     * Gets the Time/rule for transitioning from daylight time to query time.
     *
     * @return QueueQuery
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Sets the Time/rule for transitioning from daylight time to query time.
     *
     * @param  QueueQuery $query
     * @return self
     */
    public function setQuery(QueueQuery $query)
    {
        $this->query = $query;
        return $this;
    }

    /**
     * Gets op enum
     *
     * @return QueueAction
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * Sets op enum
     *
     * @param  QueueAction $op
     * @return self
     */
    public function setOp(QueueAction $op)
    {
        $this->op = $op;
        return $this;
    }

    /**
     * Gets by enum
     *
     * @return QueueActionBy
     */
    public function getBy()
    {
        return $this->by;
    }

    /**
     * Sets by enum
     *
     * @param  QueueActionBy $by
     * @return self
     */
    public function setBy(QueueActionBy $by)
    {
        $this->by = $by;
        return $this;
    }
}
