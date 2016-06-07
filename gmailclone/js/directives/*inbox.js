/**
 * Directive: Inbox
	directive is camelCased whereas the HTML element is hyphen-separated. Angular Convention and directive naming
	<inbox> will be injected with our directive template and logic
	Angular will replace the <inbox> element with the template at the templateURL, make an alias for hte controller under the name inbox
 */
angular.module('EmailApp')
  .directive('inbox', function inbox () {
    'use strict';

	// When application runs, Angular will replace the <inbox> element with the template at the template URL
	// HTML template (view) for the directive
    return {
      restrict: 'EA',
      replace: true,
      scope: true,
      templateUrl: "/gmailclone/js/directives/inbox.tmpl.html",
      controllerAs: 'inbox',

      controller: function (InboxFactory) {
        
        this.messages = [];

        this.goToMessage = function (id) {
          InboxFactory.goToMessage(id);
        };
        
		// Link function that will run straight after the controller runs
        this.deleteMessage = function (id, index) {
          InboxFactory.deleteMessage(id, index);
        };
        
        InboxFactory.getMessages()
          .then( angular.bind( this, function then() {
              this.messages = InboxFactory.messages;
            }) );

      },

      link: function (scope, element, attrs, ctrl) {
        /* 
          by convention we do not $ prefix arguments to the link function
          this is to be explicit that they have a fixed order
        */
      }
    }
  });