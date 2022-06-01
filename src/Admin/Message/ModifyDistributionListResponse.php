<?php declare(strict_types=1);
/**
 * This file is part of the Zimbra API in PHP library.
 *
 * © Nguyen Van Nguyen <nguyennv1981@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zimbra\Admin\Message;

use JMS\Serializer\Annotation\{Accessor, SerializedName, Type, XmlElement};
use Zimbra\Admin\Struct\DistributionListInfo;
use Zimbra\Soap\ResponseInterface;

/**
 * ModifyDistributionListResponse class
 *
 * @package    Zimbra
 * @subpackage Admin
 * @category   Message
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2013-present by Nguyen Van Nguyen.
 */
class ModifyDistributionListResponse implements ResponseInterface
{
    /**
     * Information about distribution list
     * @Accessor(getter="getDl", setter="setDl")
     * @SerializedName("dl")
     * @Type("Zimbra\Admin\Struct\DistributionListInfo")
     * @XmlElement
     */
    private ?DistributionListInfo $dl = NULL;

    /**
     * Constructor method for ModifyDistributionListResponse
     *
     * @param DistributionListInfo $dl
     * @return self
     */
    public function __construct(?DistributionListInfo $dl = NULL)
    {
        if ($dl instanceof DistributionListInfo) {
            $this->setDl($dl);
        }
    }

    /**
     * Gets the dl.
     *
     * @return DistributionListInfo
     */
    public function getDl(): ?DistributionListInfo
    {
        return $this->dl;
    }

    /**
     * Sets the dl.
     *
     * @param  DistributionListInfo $dl
     * @return self
     */
    public function setDl(DistributionListInfo $dl): self
    {
        $this->dl = $dl;
        return $this;
    }
}
