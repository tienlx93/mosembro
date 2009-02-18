// ==Action==
// @name           Open lexandera.com
// @description    Used to demonstrate how custom actions can be installed.
// @id             com.lexandera.scripts.Test
// @type           microformat
// @handles        adr
// @icon           http://lexandera.com/mosembrodemo/scripts/test.png
// ==/Action==


(function() {
    var action = function() { };
    action.id = 'com.lexandera.scripts.Test';
    action.process = function(data, matchedNode)
    {
        return {'intent-action': 'ACTION_VIEW',
                'intent-url': "http://lexandera.com/",
                'description-short': 'Open lexandera.com',
                'description-long': 'Open lexandera.com'};
    }
    
    return action;
})();
