        $(function() {
            $("#1, #2, #3, #4, #5, $6, #7").lavaLamp({
                fx: "backout",
                speed: 1000,
                click: function(event, menuItem) {
                    return true;
                }
            });
        });
