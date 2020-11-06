# MailSlurpClient

MailSlurp is an API for sending and receiving emails from dynamically allocated email addresses. It's designed for developers and QA teams to test applications, process inbound emails, send templated notifications, attachments, and more. 

## Resources
- [Homepage](https://www.mailslurp.com)
- Get an [API KEY](https://app.mailslurp.com/sign-up/)
- Generated [SDK Clients](https://www.mailslurp.com/docs/)
- [Examples](https://github.com/mailslurp/examples) repository


This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: 6.5.2
- Package version: 8.0.2
- Build package: org.openapitools.codegen.languages.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage

### Composer

To install the bindings via [Composer](http://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/MailSlurpClient/vendor/autoload.php');
```

## Tests

To run the unit tests:

```bash
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: API_KEY
$config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = MailSlurp\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new MailSlurp\Api\AliasControllerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_owned_alias_options = new \MailSlurp\Models\CreateOwnedAliasOptions(); // \MailSlurp\Models\CreateOwnedAliasOptions | createOwnedAliasOptions

try {
    $apiInstance->createAlias($create_owned_alias_options);
} catch (Exception $e) {
    echo 'Exception when calling AliasControllerApi->createAlias: ', $e->getMessage(), PHP_EOL;
}

?>
```

## Documentation for API Endpoints

All URIs are relative to *https://api.mailslurp.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AliasControllerApi* | [**createAlias**](docs/Api/AliasControllerApi.md#createalias) | **POST** /aliases | Create an email alias
*AliasControllerApi* | [**createAnonymousAlias**](docs/Api/AliasControllerApi.md#createanonymousalias) | **POST** /aliases/anonymous | Create an anonymous email alias
*AliasControllerApi* | [**deleteAlias**](docs/Api/AliasControllerApi.md#deletealias) | **DELETE** /aliases/{aliasId} | Delete an owned alias
*AliasControllerApi* | [**getAlias**](docs/Api/AliasControllerApi.md#getalias) | **GET** /aliases/{aliasId} | Get an email alias
*AliasControllerApi* | [**getAliases**](docs/Api/AliasControllerApi.md#getaliases) | **GET** /aliases | Get all email aliases
*AliasControllerApi* | [**updateAlias**](docs/Api/AliasControllerApi.md#updatealias) | **PUT** /aliases/{aliasId} | Update an owned alias
*AttachmentControllerApi* | [**uploadAttachment**](docs/Api/AttachmentControllerApi.md#uploadattachment) | **POST** /attachments | Upload an attachment for sending
*AttachmentControllerApi* | [**uploadMultipartForm**](docs/Api/AttachmentControllerApi.md#uploadmultipartform) | **POST** /attachments/multipart | Upload an attachment for sending using Multipart Form
*BulkActionsControllerApi* | [**bulkCreateInboxes**](docs/Api/BulkActionsControllerApi.md#bulkcreateinboxes) | **POST** /bulk/inboxes | Bulk create Inboxes (email addresses)
*BulkActionsControllerApi* | [**bulkDeleteInboxes**](docs/Api/BulkActionsControllerApi.md#bulkdeleteinboxes) | **DELETE** /bulk/inboxes | Bulk Delete Inboxes
*BulkActionsControllerApi* | [**bulkSendEmails**](docs/Api/BulkActionsControllerApi.md#bulksendemails) | **POST** /bulk/send | Bulk Send Emails
*CommonActionsControllerApi* | [**createNewEmailAddress**](docs/Api/CommonActionsControllerApi.md#createnewemailaddress) | **POST** /createInbox | Create new random inbox
*CommonActionsControllerApi* | [**createNewEmailAddress1**](docs/Api/CommonActionsControllerApi.md#createnewemailaddress1) | **POST** /newEmailAddress | Create new random inbox
*CommonActionsControllerApi* | [**emptyInbox**](docs/Api/CommonActionsControllerApi.md#emptyinbox) | **DELETE** /emptyInbox | Delete all emails in an inbox
*CommonActionsControllerApi* | [**sendEmailSimple**](docs/Api/CommonActionsControllerApi.md#sendemailsimple) | **POST** /sendEmail | Send an email
*ContactControllerApi* | [**createContact**](docs/Api/ContactControllerApi.md#createcontact) | **POST** /contacts | Create a contact
*ContactControllerApi* | [**deleteContact**](docs/Api/ContactControllerApi.md#deletecontact) | **DELETE** /contacts/{contactId} | Delete contact
*ContactControllerApi* | [**getAllContacts**](docs/Api/ContactControllerApi.md#getallcontacts) | **GET** /contacts/paginated | Get all contacts
*ContactControllerApi* | [**getContact**](docs/Api/ContactControllerApi.md#getcontact) | **GET** /contacts/{contactId} | Get contact
*ContactControllerApi* | [**getContacts**](docs/Api/ContactControllerApi.md#getcontacts) | **GET** /contacts | Get all contacts
*DomainControllerApi* | [**createDomain**](docs/Api/DomainControllerApi.md#createdomain) | **POST** /domains | Create Domain
*DomainControllerApi* | [**deleteDomain**](docs/Api/DomainControllerApi.md#deletedomain) | **DELETE** /domains/{id} | Delete a domain
*DomainControllerApi* | [**getDomain**](docs/Api/DomainControllerApi.md#getdomain) | **GET** /domains/{id} | Get a domain
*DomainControllerApi* | [**getDomains**](docs/Api/DomainControllerApi.md#getdomains) | **GET** /domains | Get domains
*EmailControllerApi* | [**deleteAllEmails**](docs/Api/EmailControllerApi.md#deleteallemails) | **DELETE** /emails | Delete all emails
*EmailControllerApi* | [**deleteEmail**](docs/Api/EmailControllerApi.md#deleteemail) | **DELETE** /emails/{emailId} | Delete an email
*EmailControllerApi* | [**downloadAttachment**](docs/Api/EmailControllerApi.md#downloadattachment) | **GET** /emails/{emailId}/attachments/{attachmentId} | Get email attachment bytes
*EmailControllerApi* | [**forwardEmail**](docs/Api/EmailControllerApi.md#forwardemail) | **POST** /emails/{emailId}/forward | Forward email
*EmailControllerApi* | [**getAttachmentMetaData**](docs/Api/EmailControllerApi.md#getattachmentmetadata) | **GET** /emails/{emailId}/attachments/{attachmentId}/metadata | Get email attachment metadata
*EmailControllerApi* | [**getAttachments**](docs/Api/EmailControllerApi.md#getattachments) | **GET** /emails/{emailId}/attachments | Get all email attachment metadata
*EmailControllerApi* | [**getEmail**](docs/Api/EmailControllerApi.md#getemail) | **GET** /emails/{emailId} | Get email content
*EmailControllerApi* | [**getEmailHTML**](docs/Api/EmailControllerApi.md#getemailhtml) | **GET** /emails/{emailId}/html | Get email content as HTML
*EmailControllerApi* | [**getEmailsPaginated**](docs/Api/EmailControllerApi.md#getemailspaginated) | **GET** /emails | Get all emails
*EmailControllerApi* | [**getRawEmailContents**](docs/Api/EmailControllerApi.md#getrawemailcontents) | **GET** /emails/{emailId}/raw | Get raw email string
*EmailControllerApi* | [**getRawEmailJson**](docs/Api/EmailControllerApi.md#getrawemailjson) | **GET** /emails/{emailId}/raw/json | Get raw email in JSON
*EmailControllerApi* | [**getUnreadEmailCount**](docs/Api/EmailControllerApi.md#getunreademailcount) | **GET** /emails/unreadCount | Get unread email count
*EmailControllerApi* | [**validateEmail**](docs/Api/EmailControllerApi.md#validateemail) | **POST** /emails/{emailId}/validate | Validate email
*FormControllerApi* | [**submitForm**](docs/Api/FormControllerApi.md#submitform) | **POST** /forms | Submit a form to be parsed and sent as an email to an address determined by the form fields
*GroupControllerApi* | [**addContactsToGroup**](docs/Api/GroupControllerApi.md#addcontactstogroup) | **PUT** /groups/{groupId}/contacts | Add contacts to a group
*GroupControllerApi* | [**createGroup**](docs/Api/GroupControllerApi.md#creategroup) | **POST** /groups | Create a group
*GroupControllerApi* | [**deleteGroup**](docs/Api/GroupControllerApi.md#deletegroup) | **DELETE** /groups/{groupId} | Delete group
*GroupControllerApi* | [**getAllGroups**](docs/Api/GroupControllerApi.md#getallgroups) | **GET** /groups/paginated | Get all Contact Groups in paginated format
*GroupControllerApi* | [**getGroup**](docs/Api/GroupControllerApi.md#getgroup) | **GET** /groups/{groupId} | Get group
*GroupControllerApi* | [**getGroupWithContacts**](docs/Api/GroupControllerApi.md#getgroupwithcontacts) | **GET** /groups/{groupId}/contacts | Get group and contacts belonging to it
*GroupControllerApi* | [**getGroupWithContactsPaginated**](docs/Api/GroupControllerApi.md#getgroupwithcontactspaginated) | **GET** /groups/{groupId}/contacts-paginated | Get group and paginated contacts belonging to it
*GroupControllerApi* | [**getGroups**](docs/Api/GroupControllerApi.md#getgroups) | **GET** /groups | Get all groups
*GroupControllerApi* | [**removeContactsFromGroup**](docs/Api/GroupControllerApi.md#removecontactsfromgroup) | **DELETE** /groups/{groupId}/contacts | Remove contacts from a group
*InboxControllerApi* | [**createInbox**](docs/Api/InboxControllerApi.md#createinbox) | **POST** /inboxes | Create an Inbox (email address)
*InboxControllerApi* | [**deleteAllInboxes**](docs/Api/InboxControllerApi.md#deleteallinboxes) | **DELETE** /inboxes | Delete all inboxes
*InboxControllerApi* | [**deleteInbox**](docs/Api/InboxControllerApi.md#deleteinbox) | **DELETE** /inboxes/{inboxId} | Delete inbox
*InboxControllerApi* | [**getAllInboxes**](docs/Api/InboxControllerApi.md#getallinboxes) | **GET** /inboxes/paginated | List Inboxes Paginated
*InboxControllerApi* | [**getEmails**](docs/Api/InboxControllerApi.md#getemails) | **GET** /inboxes/{inboxId}/emails | Get emails in an Inbox
*InboxControllerApi* | [**getInbox**](docs/Api/InboxControllerApi.md#getinbox) | **GET** /inboxes/{inboxId} | Get Inbox
*InboxControllerApi* | [**getInboxEmailsPaginated**](docs/Api/InboxControllerApi.md#getinboxemailspaginated) | **GET** /inboxes/{inboxId}/emails/paginated | Get inbox emails paginated
*InboxControllerApi* | [**getInboxSentEmails**](docs/Api/InboxControllerApi.md#getinboxsentemails) | **GET** /inboxes/{inboxId}/sent | Get Inbox Sent Emails
*InboxControllerApi* | [**getInboxTags**](docs/Api/InboxControllerApi.md#getinboxtags) | **GET** /inboxes/tags | Get inbox tags
*InboxControllerApi* | [**getInboxes**](docs/Api/InboxControllerApi.md#getinboxes) | **GET** /inboxes | List Inboxes / Email Addresses
*InboxControllerApi* | [**sendEmail**](docs/Api/InboxControllerApi.md#sendemail) | **POST** /inboxes/{inboxId} | Send Email
*InboxControllerApi* | [**setInboxFavourited**](docs/Api/InboxControllerApi.md#setinboxfavourited) | **PUT** /inboxes/{inboxId}/favourite | Set inbox favourited state
*InboxControllerApi* | [**updateInbox**](docs/Api/InboxControllerApi.md#updateinbox) | **PATCH** /inboxes/{inboxId} | Update Inbox
*MailServerControllerApi* | [**describeMailServerDomain**](docs/Api/MailServerControllerApi.md#describemailserverdomain) | **POST** /mail-server/describe/domain | Get DNS Mail Server records for a domain
*MailServerControllerApi* | [**verifyEmailAddress**](docs/Api/MailServerControllerApi.md#verifyemailaddress) | **POST** /mail-server/verify/email-address | Verify the existence of an email address at a given mail server.
*SentEmailsControllerApi* | [**getSentEmail**](docs/Api/SentEmailsControllerApi.md#getsentemail) | **GET** /sent/{id} | Get sent email receipt
*SentEmailsControllerApi* | [**getSentEmails**](docs/Api/SentEmailsControllerApi.md#getsentemails) | **GET** /sent | Get all sent emails in paginated form
*TemplateControllerApi* | [**createTemplate**](docs/Api/TemplateControllerApi.md#createtemplate) | **POST** /templates | Create a Template
*TemplateControllerApi* | [**deleteTemplate**](docs/Api/TemplateControllerApi.md#deletetemplate) | **DELETE** /templates/{TemplateId} | Delete Template
*TemplateControllerApi* | [**getAllTemplates**](docs/Api/TemplateControllerApi.md#getalltemplates) | **GET** /templates/paginated | Get all Templates in paginated format
*TemplateControllerApi* | [**getTemplate**](docs/Api/TemplateControllerApi.md#gettemplate) | **GET** /templates/{TemplateId} | Get Template
*TemplateControllerApi* | [**getTemplates**](docs/Api/TemplateControllerApi.md#gettemplates) | **GET** /templates | Get all Templates
*WaitForControllerApi* | [**waitFor**](docs/Api/WaitForControllerApi.md#waitfor) | **POST** /waitFor | Wait for conditions to be met
*WaitForControllerApi* | [**waitForEmailCount**](docs/Api/WaitForControllerApi.md#waitforemailcount) | **GET** /waitForEmailCount | Wait for and return count number of emails
*WaitForControllerApi* | [**waitForLatestEmail**](docs/Api/WaitForControllerApi.md#waitforlatestemail) | **GET** /waitForLatestEmail | Fetch inbox&#39;s latest email or if empty wait for an email to arrive
*WaitForControllerApi* | [**waitForMatchingEmail**](docs/Api/WaitForControllerApi.md#waitformatchingemail) | **POST** /waitForMatchingEmails | Wait or return list of emails that match simple matching patterns
*WaitForControllerApi* | [**waitForNthEmail**](docs/Api/WaitForControllerApi.md#waitfornthemail) | **GET** /waitForNthEmail | Wait for or fetch the email with a given index in the inbox specified
*WebhookControllerApi* | [**createWebhook**](docs/Api/WebhookControllerApi.md#createwebhook) | **POST** /inboxes/{inboxId}/webhooks | Attach a WebHook URL to an inbox
*WebhookControllerApi* | [**deleteWebhook**](docs/Api/WebhookControllerApi.md#deletewebhook) | **DELETE** /inboxes/{inboxId}/webhooks/{webhookId} | Delete and disable a Webhook for an Inbox
*WebhookControllerApi* | [**getAllWebhooks**](docs/Api/WebhookControllerApi.md#getallwebhooks) | **GET** /webhooks/paginated | List Webhooks Paginated
*WebhookControllerApi* | [**getWebhook**](docs/Api/WebhookControllerApi.md#getwebhook) | **GET** /webhooks/{webhookId} | Get a webhook for an Inbox
*WebhookControllerApi* | [**getWebhooks**](docs/Api/WebhookControllerApi.md#getwebhooks) | **GET** /inboxes/{inboxId}/webhooks | Get all Webhooks for an Inbox
*WebhookControllerApi* | [**sendTestData**](docs/Api/WebhookControllerApi.md#sendtestdata) | **POST** /webhooks/{webhookId}/test | Send webhook test data


## Documentation For Models

 - [Alias](docs/Model/Alias.md)
 - [AttachmentMetaData](docs/Model/AttachmentMetaData.md)
 - [BasicAuthOptions](docs/Model/BasicAuthOptions.md)
 - [BulkSendEmailOptions](docs/Model/BulkSendEmailOptions.md)
 - [ContactDto](docs/Model/ContactDto.md)
 - [ContactProjection](docs/Model/ContactProjection.md)
 - [CreateAnonymousAliasOptions](docs/Model/CreateAnonymousAliasOptions.md)
 - [CreateContactOptions](docs/Model/CreateContactOptions.md)
 - [CreateDomainOptions](docs/Model/CreateDomainOptions.md)
 - [CreateGroupOptions](docs/Model/CreateGroupOptions.md)
 - [CreateOwnedAliasOptions](docs/Model/CreateOwnedAliasOptions.md)
 - [CreateTemplateOptions](docs/Model/CreateTemplateOptions.md)
 - [CreateWebhookOptions](docs/Model/CreateWebhookOptions.md)
 - [DescribeDomainOptions](docs/Model/DescribeDomainOptions.md)
 - [DescribeMailServerDomainResult](docs/Model/DescribeMailServerDomainResult.md)
 - [DomainDto](docs/Model/DomainDto.md)
 - [DomainPreview](docs/Model/DomainPreview.md)
 - [Email](docs/Model/Email.md)
 - [EmailAnalysis](docs/Model/EmailAnalysis.md)
 - [EmailPreview](docs/Model/EmailPreview.md)
 - [EmailProjection](docs/Model/EmailProjection.md)
 - [EmailVerificationResult](docs/Model/EmailVerificationResult.md)
 - [ForwardEmailOptions](docs/Model/ForwardEmailOptions.md)
 - [GroupContactsDto](docs/Model/GroupContactsDto.md)
 - [GroupDto](docs/Model/GroupDto.md)
 - [GroupProjection](docs/Model/GroupProjection.md)
 - [HTMLValidationResult](docs/Model/HTMLValidationResult.md)
 - [Inbox](docs/Model/Inbox.md)
 - [InboxProjection](docs/Model/InboxProjection.md)
 - [MatchOption](docs/Model/MatchOption.md)
 - [MatchOptions](docs/Model/MatchOptions.md)
 - [NameServerRecord](docs/Model/NameServerRecord.md)
 - [PageAlias](docs/Model/PageAlias.md)
 - [PageContactProjection](docs/Model/PageContactProjection.md)
 - [PageEmailPreview](docs/Model/PageEmailPreview.md)
 - [PageEmailProjection](docs/Model/PageEmailProjection.md)
 - [PageGroupProjection](docs/Model/PageGroupProjection.md)
 - [PageInboxProjection](docs/Model/PageInboxProjection.md)
 - [PageSentEmailProjection](docs/Model/PageSentEmailProjection.md)
 - [PageTemplateProjection](docs/Model/PageTemplateProjection.md)
 - [PageWebhookProjection](docs/Model/PageWebhookProjection.md)
 - [Pageable](docs/Model/Pageable.md)
 - [RawEmailJson](docs/Model/RawEmailJson.md)
 - [SendEmailOptions](docs/Model/SendEmailOptions.md)
 - [SentEmailDto](docs/Model/SentEmailDto.md)
 - [SentEmailProjection](docs/Model/SentEmailProjection.md)
 - [SetInboxFavouritedOptions](docs/Model/SetInboxFavouritedOptions.md)
 - [SimpleSendEmailOptions](docs/Model/SimpleSendEmailOptions.md)
 - [Sort](docs/Model/Sort.md)
 - [TemplateDto](docs/Model/TemplateDto.md)
 - [TemplateProjection](docs/Model/TemplateProjection.md)
 - [TemplateVariable](docs/Model/TemplateVariable.md)
 - [UnreadCount](docs/Model/UnreadCount.md)
 - [UpdateGroupContacts](docs/Model/UpdateGroupContacts.md)
 - [UpdateInboxOptions](docs/Model/UpdateInboxOptions.md)
 - [UploadAttachmentOptions](docs/Model/UploadAttachmentOptions.md)
 - [ValidationDto](docs/Model/ValidationDto.md)
 - [ValidationMessage](docs/Model/ValidationMessage.md)
 - [VerifyEmailAddressOptions](docs/Model/VerifyEmailAddressOptions.md)
 - [WaitForConditions](docs/Model/WaitForConditions.md)
 - [WebhookDto](docs/Model/WebhookDto.md)
 - [WebhookProjection](docs/Model/WebhookProjection.md)
 - [WebhookTestRequest](docs/Model/WebhookTestRequest.md)
 - [WebhookTestResponse](docs/Model/WebhookTestResponse.md)
 - [WebhookTestResult](docs/Model/WebhookTestResult.md)


## Documentation For Authorization



## API_KEY


- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header



## Author



