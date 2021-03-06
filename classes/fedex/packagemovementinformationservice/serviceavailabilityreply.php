<?php defined('SYSPATH') or die('No direct script access.');

/**
 * The descriptive data returned for a FedEx service availability request.
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_PackageMovementInformationService_ServiceAvailabilityReply
    extends FedEx_AbstractComplexType
{

    /**
     * Identifies the highest severity encountered when executing the request; in order from high to low: FAILURE, ERROR, WARNING, NOTE, SUCCESS.
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityReply
     */
    public function setHighestSeverity(FedEx_PackageMovementInformationService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data detailing the status of a sumbitted transaction.
     *
     * @param array[Notification] $Notifications
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data that governs data payload language/translations.  The TransactionDetail from the request is echoed back to the caller in the corresponding reply. 
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityReply
     */
    public function setTransactionDetail(FedEx_PackageMovementInformationService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityReply
     */
    public function setVersion(FedEx_PackageMovementInformationService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * The descriptive data for the collection of available FedEx Services returned for the request.
     *
     * @param array[ServiceAvailabilityOption] $Options
     * return FedEx_PackageMovementInformationService_ServiceAvailabilityReply
     */
    public function setOptions(array $options)
    {
        $this->Options = $options;
        return $this;
    }
    

    
}