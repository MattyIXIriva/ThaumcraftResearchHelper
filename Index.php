<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Thaumcraft 4.1 Research Helper</title>
	<script type="text/javascript" src="buckets-minified.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
	<script type="text/javascript" src="select2.min.js"></script>
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="select2.css">
	<script type="text/javascript" src="translation_dictionary.js"></script>
	<script type="text/javascript" src="version_dictionary.js"></script>
	<script type="text/javascript" src="addon_dictionary.js"></script>
	<script type="text/javascript" src="tcresearch.js"></script>
	<link rel="stylesheet" href="tcresearch.css">
	<style type="text/css">
	.select2-container .select2-choice {
		height: 44px;
	}
	</style>
</head>
<body>
	<h2>Thaumcraft 4.1 Research Helper</h2>
	<div id="combination_box"><div id="left"></div><span class="operator">+</span><div id="right"></div><span class="operator">=</span><div id="equals"></div></div>
	<table>
		<tr>
			<td>Version:</td>
			<td>
				<select id="version">
				</select>
			</td>
		</tr>
		<tr><td>From:</td><td><input type=hidden id="fromSel"></input></td></tr>
		<tr><td>To:</td><td><input type=hidden id="toSel"></input></td></tr>
		<tr><td>Min. Steps:</td><td><input id="spinner" name="value" value="1" style="width:140px" /></td></tr>
		<tr><td></td><td><input id="find_connection" type="button" value="Find Connection" /><input id="close_results" type="button" value="Close all results" /></td></tr>
		<tr><td>Addons:</td><td id="addons"></td></tr> 
		<tr><td>Available<br/>Aspects:</td><td><input type="button" id="sel_all" value="Select All Aspects"><input type="button" id="desel_all" value="Deselect All Aspects"><ul id="avail" class="aspectlist"></ul></td></tr>
	</table>

	<h3 style="margin-top:100px">Help</h3>
	<p>This script helps you with your Thaumcraft 4.1 research. If you have a research note with two aspects that you don't know how to connect, simply choose them in the dropdown list above (<strong>From:</strong> and <strong>To:</strong>). Additionally, choose the minimum number of steps between those two aspects. If in your research note, the two aspects have two blank spaces between them, choose the value 2 for <strong>Min. Steps</strong>. Then click <strong>Find Connection</strong> and the script will search for the shortest path (well, with at least the minimum length) that connects the two aspects. Note that sometimes the length of any path is longer then the given minimum, but this should not be a problem for your research note.</p>
	<p>If you are unhappy with the path you got, because you do not have access to those aspects yet or they are quite rare, simply disable those aspects from <strong>Available Aspects:</strong>. The script will then try to find paths without these. Note that this may cause the path to grow longer. If too many aspects are disabled and there are no paths left without any of those, the script will try to find the shortest path using the minimal number of disabled aspects.</p>
	<p style="size:small;color:#666;margin-top:50px;">This work is licensed under a <a href="http://creativecommons.org/licenses/by/4.0/" style="color:#55a;">Creative Commons Attribution 4.0 License</a>. Sources can be found in the <a href="https://github.com/ythri/tcresearch/tree/gh-pages" style="color:#55a;">github repository</a>.</p>
</body>
</html>
