// ==Action==
// @name           Show a JS alert() when clicked
// @id             com.lexandera.scripts.JSDemo
// @type           microformat
// @handles        adr
// @icon           http://lexandera.com/mosembrodemo/scripts/test.png
// ==/Action==


(function() {
    var action = function() { };
    action.id = 'com.lexandera.scripts.JSDemo';
    action.process = function(data, matchedNode)
    {
        return {'intent-action': 'RUN_JAVASCRIPT',
                'content': function() { alert('Hello!'); },
                'description-short': 'Show an alert() dialog.',
                'description-long': 'Show an alert() dialog.'};
    }
    
    return action;
})();
