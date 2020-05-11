<?php

namespace {

    use SilverStripe\CMS\Controllers\ContentController;
    use SilverStripe\View\Requirements;

    class PageController extends ContentController
    {
        /**
         * An array of actions that can be accessed via a request. Each array element should be an action name, and the
         * permissions or conditions required to allow the user to access it.
         *
         * <code>
         * [
         *     'action', // anyone can access this action
         *     'action' => true, // same as above
         *     'action' => 'ADMIN', // you must have ADMIN permissions to access this action
         *     'action' => '->checkAction' // you can only access this action if $this->checkAction() returns true
         * ];
         * </code>
         *
         * @var array
         */
        private static $allowed_actions = [];

        protected function init()
        {
            parent::init();

            $co = 'themes/co-base/client/';
            $ge = 'themes/gecco/client/';
            // You can include any CSS or JS required by your project here.
            // See: https://docs.silverstripe.org/en/developer_guides/templates/requirements/
            Requirements::css('https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,400;0,700;1,400&family=Nunito:wght@400;700;900&display=swap');
            Requirements::css("{$co}line-awesome/css/line-awesome.min.css");

            Requirements::combine_files('app.combined.css', [
                "{$co}css/globals.css",
                "{$ge}css/globals.css",
                "{$co}css/typography.css",
                "{$ge}css/typography.css",
                "{$co}css/header.css",
                "{$co}css/elements.css",
            ]);
        }
    }
}
