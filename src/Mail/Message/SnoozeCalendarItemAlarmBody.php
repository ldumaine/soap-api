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
use Zimbra\Common\Soap\{SoapBody, SoapRequestInterface, SoapResponseInterface};

/**
 * SnoozeCalendarItemAlarmBody class
 * 
 * @package    Zimbra
 * @subpackage Mail
 * @category   Message
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013-present by Nguyen Van Nguyen.
 */
class SnoozeCalendarItemAlarmBody extends SoapBody
{
    /**
     * @Accessor(getter="getRequest", setter="setRequest")
     * @SerializedName("SnoozeCalendarItemAlarmRequest")
     * @Type("Zimbra\Mail\Message\SnoozeCalendarItemAlarmRequest")
     * @XmlElement(namespace="urn:zimbraMail")
     */
    private ?SoapRequestInterface $request = NULL;

    /**
     * @Accessor(getter="getResponse", setter="setResponse")
     * @SerializedName("SnoozeCalendarItemAlarmResponse")
     * @Type("Zimbra\Mail\Message\SnoozeCalendarItemAlarmResponse")
     * @XmlElement(namespace="urn:zimbraMail")
     */
    private ?SoapResponseInterface $response = NULL;

    /**
     * Constructor method for SnoozeCalendarItemAlarmBody
     *
     * @return self
     */
    public function __construct(
        ?SnoozeCalendarItemAlarmRequest $request = NULL, ?SnoozeCalendarItemAlarmResponse $response = NULL
    )
    {
        parent::__construct($request, $response);
    }

    public function setRequest(SoapRequestInterface $request): self
    {
        if ($request instanceof SnoozeCalendarItemAlarmRequest) {
            $this->request = $request;
        }
        return $this;
    }

    public function getRequest(): ?SoapRequestInterface
    {
        return $this->request;
    }

    public function setResponse(SoapResponseInterface $response): self
    {
        if ($response instanceof SnoozeCalendarItemAlarmResponse) {
            $this->response = $response;
        }
        return $this;
    }

    public function getResponse(): ?SoapResponseInterface
    {
        return $this->response;
    }
}
