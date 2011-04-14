<?php

class NewsletterSiteConfig extends DataObjectDecorator {
    function extraStatics() {
        return array(
            'db' => array(
                'NewsletterUnsubscribeTitle' => 'Varchar(255)',
                'NewsletterUnsubscribeContent' => 'HTMLText'
            )
        );
    }
 
    public function updateCMSFields(FieldSet $fields) {
        $fields->addFieldToTab("Root.Newsletter", new TextField("NewsletterUnsubscribeTitle", "Unsubscribe page title"));
        $fields->addFieldToTab("Root.Newsletter", new HTMLEditorField("NewsletterUnsubscribeContent", "Unsubscribe page content"));
    }
}

