<?php
echo ModuleHelper::buildMethodCallForm("MyCustomFunctions", "save");
?>
<p>
	<textarea name="code" class="codemirror"
		data-mimetype="application/x-httpd-php"><?php Template::escape(ViewBag::get("code"));?></textarea>
</p>
<p>
	<button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> <?php translate("save");?></button>
</p>
</form>
<?php 
BackendHelper::enqueueEditorScripts();
combinedScriptHtml();
