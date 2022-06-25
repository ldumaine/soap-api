<?php declare(strict_types=1);
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Mail\Message;

use JMS\Serializer\Annotation\{Accessor, SerializedName, Type, XmlElement};
use Zimbra\Mail\Struct\CalendarItemInfo;
use Zimbra\Mail\Struct\TaskItemInfo;
use Zimbra\Soap\ResponseInterface;

/**
 * GetAppointmentResponse class
 * 
 * @package    Zimbra
 * @subpackage Mail
 * @category   Message
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013-present by Nguyen Van Nguyen.
 */
class GetAppointmentResponse implements ResponseInterface
{
    /**
     * Appointment information
     * @Accessor(getter="getApptItem", setter="setApptItem")
     * @SerializedName("appt")
     * @Type("Zimbra\Mail\Struct\CalendarItemInfo")
     * @XmlElement(namespace="urn:zimbraMail")
     */
    private ?CalendarItemInfo $appt = NULL;

    /**
     * Task information
     * @Accessor(getter="getTaskItem", setter="setTaskItem")
     * @SerializedName("task")
     * @Type("Zimbra\Mail\Struct\TaskItemInfo")
     * @XmlElement(namespace="urn:zimbraMail")
     */
    private ?TaskItemInfo $task = NULL;

    /**
     * Constructor method for GetAppointmentResponse
     *
     * @param  CalendarItemInfo $appt
     * @return self
     */
    public function __construct(
        ?CalendarItemInfo $appt = NULL,
        ?TaskItemInfo $task = NULL
    )
    {
        if ($appt instanceof CalendarItemInfo) {
            $this->setApptItem($appt);
        }
        if ($task instanceof TaskItemInfo) {
            $this->setTaskItem($task);
        }
    }

    /**
     * Gets appt
     *
     * @return CalendarItemInfo
     */
    public function getApptItem(): ?CalendarItemInfo
    {
        return $this->appt;
    }

    /**
     * Sets appt
     *
     * @param  CalendarItemInfo $appt
     * @return self
     */
    public function setApptItem(CalendarItemInfo $appt): self
    {
        $this->appt = $appt;
        return $this;
    }

    /**
     * Gets task
     *
     * @return TaskItemInfo
     */
    public function getTaskItem(): ?TaskItemInfo
    {
        return $this->task;
    }

    /**
     * Sets task
     *
     * @param  TaskItemInfo $task
     * @return self
     */
    public function setTaskItem(TaskItemInfo $task): self
    {
        $this->task = $task;
        return $this;
    }
}
