var ST = window.ST || {};

ST.init = function() {
	ST.change();
	//ST.expand();
	ST.show_embed();
};

ST.change = function() {
	$('.change').oneTime(3000,
	function() {
		$(this).fadeOut(2000);
	});
};

ST.show_embed = function() {
	$embed_field = $('#embed_field');
	$embed_field.hide();
	$embed_field.after('<a id="show_code" href="#">Show code</a>');
	$('#show_code').on('click', function(e) {
		e.preventDefault();
		$(this).hide();
		$embed_field.show().select();
	});
	$embed_field.on("blur", function() {
		$(this).hide();
		$('#show_code').show();
	});
};

$(document).ready(function() {
	ST.init();
    function setupEditor(elementId) {
        modes = $.parseJSON($("#codemirror_modes").text());
        var codeMirrorOptions = {
          mode: "scheme",
          lineNumbers: true,
          matchBrackets: true,
          tabMode: "indent",
          viewportMargin: Infinity
        };
        return CodeMirror.fromTextArea(
            document.getElementById(elementId),
            codeMirrorOptions
        );
    }

    set_syntax = function(mode, editor) {
        editor.setOption("mode", mode);
    };

    function set_language(editor) {
        var lang = $("#lang").val();
        mode = modes[lang];

        $.get(
        base_url + "main/get_cm_js/" + lang,
        function(data) {
            if (data !== "") {
            set_syntax(mode, editor);
            } else {
            set_syntax(null, editor);
            }
        },
        "script"
        );
    };
    var outputCode = $("#outputCode");
    if(outputCode.length > 0){
        var outputCodeEditor = setupEditor("outputCode");
        set_language(outputCodeEditor);

    }
    var inputCode = $("#code");
    if(inputCode.length > 0){
        var inputCodeEditor = setupEditor("code");
        set_language(inputCodeEditor);
        $("#lang").change(function() {
            set_language(inputCodeEditor);
        });
    }
});
