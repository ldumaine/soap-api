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
use Zimbra\Admin\Struct\AlwaysOnClusterInfo;
use Zimbra\Common\Struct\SoapResponseInterface;

/**
 * ModifyAlwaysOnClusterResponse class
 *
 * @package    Zimbra
 * @subpackage Admin
 * @category   Message
 * @author     Nguyen Van Nguyen - nguyennv1981@gmail.com
 * @copyright  Copyright © 2020-present by Nguyen Van Nguyen.
 */
class ModifyAlwaysOnClusterResponse implements SoapResponseInterface
{
    /**
     * Information about server
     * @Accessor(getter="getAlwaysOnCluster", setter="setAlwaysOnCluster")
     * @SerializedName("alwaysOnCluster")
     * @Type("Zimbra\Admin\Struct\AlwaysOnClusterInfo")
     * @XmlElement(namespace="urn:zimbraAdmin")
     */
    private ?AlwaysOnClusterInfo $cluster = NULL;

    /**
     * Constructor method for ModifyAlwaysOnClusterResponse
     *
     * @param AlwaysOnClusterInfo $cluster
     * @return self
     */
    public function __construct(?AlwaysOnClusterInfo $cluster = NULL)
    {
        if ($cluster instanceof AlwaysOnClusterInfo) {
            $this->setAlwaysOnCluster($cluster);
        }
    }

    /**
     * Get the cluster.
     *
     * @return AlwaysOnClusterInfo
     */
    public function getAlwaysOnCluster(): ?AlwaysOnClusterInfo
    {
        return $this->cluster;
    }

    /**
     * Set the cluster.
     *
     * @param  AlwaysOnClusterInfo $cluster
     * @return self
     */
    public function setAlwaysOnCluster(AlwaysOnClusterInfo $cluster): self
    {
        $this->cluster = $cluster;
        return $this;
    }
}
