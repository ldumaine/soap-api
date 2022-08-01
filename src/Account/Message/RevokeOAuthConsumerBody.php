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

use JMS\Serializer\Annotation\{Accessor, SerializedName, Type, XmlElement};
use Zimbra\Common\Struct\{SoapBody, SoapRequestInterface, SoapResponseInterface};

/**
 * RevokeOAuthConsumerBody class
 * 
 * @package    Zimbra
 * @subpackage Account
 * @category   Message
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2020-present by Nguyen Van Nguyen.
 */
class RevokeOAuthConsumerBody extends SoapBody
{
    /**
     * @Accessor(getter="getRequest", setter="setRequest")
     * @SerializedName("RevokeOAuthConsumerRequest")
     * @Type("Zimbra\Account\Message\RevokeOAuthConsumerRequest")
     * @XmlElement(namespace="urn:zimbraAccount")
     */
    private ?SoapRequestInterface $request = NULL;

    /**
     * @Accessor(getter="getResponse", setter="setResponse")
     * @SerializedName("RevokeOAuthConsumerResponse")
     * @Type("Zimbra\Account\Message\RevokeOAuthConsumerResponse")
     * @XmlElement(namespace="urn:zimbraAccount")
     */
    private ?SoapResponseInterface $response = NULL;

    /**
     * Constructor method for RevokeOAuthConsumerBody
     *
     * @return self
     */
    public function __construct(
        ?RevokeOAuthConsumerRequest $request = NULL, ?RevokeOAuthConsumerResponse $response = NULL
    )
    {
        parent::__construct($request, $response);
    }

    public function setRequest(SoapRequestInterface $request): self
    {
        if ($request instanceof RevokeOAuthConsumerRequest) {
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
        if ($response instanceof RevokeOAuthConsumerResponse) {
            $this->response = $response;
        }
        return $this;
    }

    public function getResponse(): ?SoapResponseInterface
    {
        return $this->response;
    }
}
