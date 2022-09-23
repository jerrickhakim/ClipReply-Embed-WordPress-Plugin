<script>
    let widgetConfig = {
        id: "<?php echo $atts['id']; ?>",
        text: "<?php echo $atts['text']; ?>",
        color: "<?php echo $atts['color']; ?>",
        triggerStyle: "<?php echo $atts['triggerStyle']; ?>",
        position: "<?php echo $atts['position']; ?>",
        disabled: "<?php echo $atts['disabled']; ?>",
        demolishOnDismiss: "<?php echo $atts['demolishOnDismiss']; ?>",
        demolishOnClose: "<?php echo $atts['demolishOnClose']; ?>",
    };


    if (typeof ClipReplyWidget == "undefined") {
        var clipReplyEmbedScript = document.createElement("script");
        clipReplyEmbedScript.src = "https://clipreply.com/widget/index.js";
        document.head.appendChild(clipReplyEmbedScript);
        clipReplyEmbedScript.onload = function() {
            window.clipReplyWidgetCreateInstance(widgetConfig);
        };
    } else {
        window.clipReplyWidgetCreateInstance(widgetConfig);
    }
</script>