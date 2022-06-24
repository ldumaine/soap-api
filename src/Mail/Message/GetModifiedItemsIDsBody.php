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
use Zimbra\Soap\{Body, RequestInterface, ResponseInterface};

/**
 * GetModifiedItemsIDsBody class
 * 
 * @package    Zimbra
 * @subpackage Mail
 * @category   Message
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013-present by Nguyen Van Nguyen.
 */
class GetModifiedItemsIDsBody extends Body
{
    /**
     * @Accessor(getter="getRequest", setter="setRequest")
     * @SerializedName("GetModifiedItemsIDsRequest")
     * @Type("Zimbra\Mail\Message\GetModifiedItemsIDsRequest")
     * @XmlElement(namespace="urn:zimbraMail")
     */
    private ?RequestInterface $request = NULL;

    /**
     * @Accessor(getter="getResponse", setter="setResponse")
     * @SerializedName("GetModifiedItemsIDsResponse")
     * @Type("Zimbra\Mail\Message\GetModifiedItemsIDsResponse")
     * @XmlElement(namespace="urn:zimbraMail")
     */
    private ?ResponseInterface $response = NULL;

    /**
     * Constructor method for GetModifiedItemsIDsBody
     *
     * @return self
     */
    public function __construct(
        ?GetModifiedItemsIDsRequest $request = NULL, ?GetModifiedItemsIDsResponse $response = NULL
    )
    {
        parent::__construct($request, $response);
    }

    public function setRequest(RequestInterface $request): self
    {
        if ($request instanceof GetModifiedItemsIDsRequest) {
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
        if ($response instanceof GetModifiedItemsIDsResponse) {
            $this->response = $response;
        }
        return $this;
    }

    public function getResponse(): ?ResponseInterface
    {
        return $this->response;
    }
}
