<div class="two wide column">
	<!-- Bordel je trouve pas comment appliquer un offset -->
  </div>
<div class="ten wide column">
	<?php echo validation_errors(); ?>
	<form action="<?php echo base_url('index.php/home/doCreerObjet');?>" method="post">

		<div class="ui form segment">
		  <div class="field">
			<label>Nom de l'objet</label>
			<div class="ui left labeled icon input">
			  <input type="text" name="objectName"  placeholder="Nom de l'objet">
			  <i class="gift icon"></i>
			  <div class="ui corner label">
				<i class="icon asterisk"></i>
			  </div>
			<span style="opacity: 1; background-size: 19px 13px; left: 875px; top: 12px; width: 19px; min-width: 19px; height: 13px; position: absolute; background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAANCAYAAABLjFUnAAAACXBIWXMAAAsTAAALEwEAmpwYAAABMmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarZG9SsNQGIaf04qCQxAJbsLBQVzEn61j0pYiONQokmRrkkMVbXI4Of508ia8CAcXR0HvoOIgOHkJboI4ODgECU4i+EzP9w4vL3zQWPE6frcxB6PcmqDnyzCK5cwj0zQBYJCW2uv3twHyIlf8RMD7MwLgadXr+F3+xmyqjQU+gc1MlSmIdSA7s9qCuATc5EhbEFeAa/aCNog7wBlWPgGcpPIXwDFhFIN4BdxhGMXQAHCTyl3AtercArQLPTaHwwMrN1qtlvSyIlFyd1xaNSrlVp4WRhdmYFUGVPuq3Z7Wx0oGPZ//JYxiWdnbDgIQC5M6q0lPzOn3D8TD73fdMb4HL4Cp2zrb/4DrNVhs1tnyEsxfwI3+AvOlUD7FY+VVAAAAIGNIUk0AAHolAACAgwAA9CUAAITRAABtXwAA6GwAADyLAAAbWIPnB3gAAAEBSURBVHjapNK9K4UBFMfxD12im8JkMdyMRmUwKCyKhKQsJspgcjerxR+hDFIGhWwGwy0MFiUxSCbZ5DXiYjnqSY/ui+90Op3zHX7n1OTzeSlkMYpW1GESnSjgBGu4+L2Ukc4z1qPuwTDu0YsOnKbJapXmEP3YxDUGsJE2mFEeQxhBOxr/Giola8MCZtASvR3s4hY3qE+TZSPwd+Qip6mof7jDE5rRhAZc4QuXSdkrujCNvliAR+zFBQ/wgmLk/YmPmCsmZUVsx8JZyLewhPNygv2dWS6u9oZFrKiA5Gt0Yx8PGK9UlJQNxu8UMIZjVZDBPOawjNW4pmplE5jFkX/yPQDFYTbukzAYUgAAAABJRU5ErkJggg==); border: none; display: inline; visibility: visible; z-index: auto; background-position: 0px 0px; background-repeat: no-repeat no-repeat;"></span></div>
		  </div>
		  <div class="ui error message">
			<div class="header">Erreur : </div>
		  </div>
		  <input type="submit" class="ui blue submit button" value="Créer l'objet" />
		</div>
	</form>
</div>