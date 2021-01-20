<?php declare(strict_types=1);
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Account\Message;

use JMS\Serializer\Annotation\{Accessor, AccessType, SerializedName, Type, XmlElement, XmlRoot};
use Zimbra\Soap\{Body, RequestInterface, ResponseInterface};

/**
 * GrantRightsBody class
 * 
 * @package    Zimbra
 * @subpackage Account
 * @category   Message
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2020 by Nguyen Van Nguyen.
 * @AccessType("public_method")
 * @XmlRoot(name="Body")
 */
class GrantRightsBody extends Body
{
    /**
     * @Accessor(getter="getRequest", setter="setRequest")
     * @SerializedName("GrantRightsRequest")
     * @Type("Zimbra\Account\Message\GrantRightsRequest")
     * @XmlElement(namespace="urn:zimbraAccount")
     */
    private $request;

    /**
     * @Accessor(getter="getResponse", setter="setResponse")
     * @SerializedName("GrantRightsResponse")
     * @Type("Zimbra\Account\Message\GrantRightsResponse")
     * @XmlElement(namespace="urn:zimbraAccount")
     */
    private $response;

    /**
     * Constructor method for GrantRightsBody
     *
     * @return self
     */
    public function __construct(
        ?GrantRightsRequest $request = NULL, ?GrantRightsResponse $response = NULL
    )
    {
        parent::__construct($request, $response);
    }

    public function setRequest(RequestInterface $request): self
    {
        if ($request instanceof GrantRightsRequest) {
            $this->request = $request;
        }
        return $this;
    }

    public function getRequest(): ?RequestInterface
    {
        return $this->request;
    }

    public function setResponse(ResponseInterface $response): self
    {
        if ($response instanceof GrantRightsResponse) {
            $this->response = $response;
        }
        return $this;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
