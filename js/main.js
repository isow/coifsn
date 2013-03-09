$(function(){
    
    var WorkspaceRouter = Backbone.Router.extend({
        routes: {
            "help":                 "help",    // #help
            "search/:query":        "search",  // #search/kiwis
            "search/:query/p:page": "search"   // #search/kiwis/p7
        },

        help: function() {
            alert('HELP!!!');
        },

        search: function(query, page) {
            alert('SEARCH : query = ' + query + ' page = ' + page);
        }

    });




    new WorkspaceRouter();
    Backbone.history.start({
        pushState: true
    });
});


var AppView = Backbone.View.extend({

    // Instead of generating a new element, bind to the existing skeleton of
    // the App already present in the HTML.
    el: $("#container"),

    // Delegated events for creating new items, and clearing completed ones.
    events: {
        "keypress #new-todo":  "createOnEnter",
        "click #clear-completed": "clearCompleted",
        "click #toggle-all": "toggleAllComplete"
    }
});