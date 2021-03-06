<?php defined('SYSPATH') or die('No direct script access.');

/**
 * 
 *
 * @version     3.0
 * @author      Jeremy Dunn
 * @link        http://code.google.com/p/php-fedex-api-wrapper/
 * @package     PHP FedEx API for Kohana
*/
class FedEx_UploadDocumentService_UploadDocumentsReply
    extends FedEx_AbstractComplexType
{

    /**
     * This indicates the highest level of severity of all the notifications returned in this reply
     *
     * @param NotificationSeverityType $HighestSeverity
     * return FedEx_UploadDocumentService_UploadDocumentsReply
     */
    public function setHighestSeverity(FedEx_UploadDocumentService_NotificationSeverityType $highestSeverity)
    {
        $this->HighestSeverity = $highestSeverity;
        return $this;
    }
    
    /**
     * The descriptive data regarding the results of the submitted transaction.
     *
     * @param array[Notification] $Notifications
     * return FedEx_UploadDocumentService_UploadDocumentsReply
     */
    public function setNotifications(array $notifications)
    {
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Descriptive data for this customer transaction. The TransactionDetail from the request is echoed back to the caller in the corresponding reply.
     *
     * @param TransactionDetail $TransactionDetail
     * return FedEx_UploadDocumentService_UploadDocumentsReply
     */
    public function setTransactionDetail(FedEx_UploadDocumentService_TransactionDetail $transactionDetail)
    {
        $this->TransactionDetail = $transactionDetail;
        return $this;
    }
    
    /**
     * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
     *
     * @param VersionId $Version
     * return FedEx_UploadDocumentService_UploadDocumentsReply
     */
    public function setVersion(FedEx_UploadDocumentService_VersionId $version)
    {
        $this->Version = $version;
        return $this;
    }
    
    /**
     * 
     *
     * @param array[UploadDocumentStatusDetail] $DocumentStatuses
     * return FedEx_UploadDocumentService_UploadDocumentsReply
     */
    public function setDocumentStatuses(array $documentStatuses)
    {
        $this->DocumentStatuses = $documentStatuses;
        return $this;
    }
    

    
}