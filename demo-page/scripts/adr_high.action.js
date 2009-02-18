// ==Action==
// @name           Highlight address
// @id             com.lexandera.scripts.HighlightAddress
// @type           microformat
// @handles        adr
// @icon           http://lexandera.com/mosembrodemo/scripts/test.png
// ==/Action==


(function() {
    var action = function() { };
    action.id = 'com.lexandera.scripts.HighlightAddress';
    action.process = function(data, matchedNode)
    {
        matchedNode.style.backgroundColor = '#FFFBD5';
        matchedNode.style.border = '1px solid #FCC17F';
        
        return null;
    }
    
    return action;
})();
