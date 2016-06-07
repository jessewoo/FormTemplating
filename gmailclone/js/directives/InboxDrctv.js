/**
 * Directive: Inbox <inbox></inbox>
 * Take on custom HTML elements, <inbox> element
 */
angular.module('EmailApp')
  .directive('inbox', function InboxDrctv () {
    'use strict';

    //  Return a JS object with various properties
    return {
      //  Specify an element directive, replace <inbox> with templateURL
      restrict: 'EA',
      replace: true,
      scope: true,
      templateUrl: "js/directives/inbox.tmpl.html",
      controllerAs: 'inbox',

      //  this is alias for "inbox", accessible inside the controller as "this", inside the template as "inbox"
      controller: function (InboxFactory) {
        this.messages = [];

        this.goToMessage = function (id) {
          InboxFactory.goToMessage(id);
          console.log(id);
        };
        
        this.deleteMessage = function (id, index) {
          InboxFactory.deleteMessage(id, index);
        };
        
        InboxFactory.getMessages()
          .then( angular.bind( this, function then() {
              this.messages = InboxFactory.messages;
              console.log(InboxFactory.messages);
            }) );

      },

      //  Received aliased controller as fourth argument, scope always first
      link: function (scope, element, attrs, ctrl) {
        /* 
          by convention we do not $ prefix arguments to the link function
          this is to be explicit that they have a fixed order
        */
      }
    }
  });