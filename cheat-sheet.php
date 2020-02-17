<?php
	require_once('includes/header.php');
?>

<div>
	<div class="container">
	<div class="page-container">
		<div class="row">
				<div class="col-md-10 offset-md-1">
					<h1 style="color:#00a4c3">HTML & CSS Cheat Sheet</h1>
				</div>
		</div>
		<div class="row" style="margin-top:30px;">
			<div class="col-md-2 offset-md-1">
				<a data-div="basic" class="menus" href="#">Basic</a>
				<a data-div="head" class="menus" href="#"> Head</a>
				<a data-div="meta" class="menus" href="#"> Meta</a>
				<a data-div="paragraph" class="menus" href="#">Paragraph</a> 
		 		<a data-div="anchor" class="menus" href="#"> Anchor</a>
				<a data-div="headings" class="menus" href="#"> Headings</a>
				<a data-div="images" class="menus" href="#"> Images</a>
			</div>
			<div class="col-md-3">
				<a data-div="lists" class="menus" href="#"> Lists</a>
				<a data-div="formatting" class="menus" href="#"> Formatting</a>
				<a data-div="spans" class="menus" href="#"> Span</a>
				<a data-div="classes-ids" class="menus" href="#"> Class and ID</a>
				<a data-div="divs" class="menus" href="#"> Divs</a>
				<a data-div="forms" class="menus" href="#"> Forms</a>
				<a data-div="tables" class="menus" href="#"> Tables</a>
				<a data-div="miscellaneous" class="menus" href="#"> Miscellaneous</a>
			</div>
		</div>
	</div>
	</div>
</div>
 

<div>
	<div class="container-fluid">
		<div class="row">
			<div class="codeModal">
				<div class="modal-content">

					<div class="row contentRow" id="basic">
						<div class="col-md-6">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>
										All HTML5 documents must start with a document type declaration: <span class="element-highlight">&lt;!DOCTYPE HTML&gt;</span>.
									</p>
									<p>
										The HTML document starts with <span class="element-highlight">&lt;html&gt;</span> and ends with <span class="element-highlight">&lt;/html&gt;</span>.
									</p>
									<p>
										The <span class="element-highlight">&lt;head&gt;</span> element contains meta information about the document
									</p>
									<p>
										All your content goes between the <span class="element-highlight">&lt;body&gt;</span> and <span class="element-highlight">&lt;/body&gt;</span>.
									</p>
									<p>
										<span class="element-highlight">&lt;!DOCTYPE HTML&gt;</span> <br>
										<span class="element-highlight">&lt;html&gt;</span> <br>
										<span class="element-highlight">&lt;head&gt;</span><span class="element-highlight">&lt;/head&gt;</span> <br>
										<span class="element-highlight">&lt;body&gt;</span> <br><br>
										<span class="element-highlight">&lt;p&gt;</span>This is your content.<span class="element-highlight">&lt;/p&gt;</span><br><br>
										<span class="element-highlight">&lt;/body&gt;</span> <br>
										<span class="element-highlight">&lt;/html&gt;</span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<h5 class="modal-title" id="paragraphModalLabel">Preview</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p class="preview-code">This is your content.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="head">
						<div class="col-md-12">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>
										The <span class="element-highlight">&lt;head&gt;</span> element is part of the document which contains information such as <span class="element-highlight">&lt;title&gt;</span>, Link to CSS, Javascript, metadata. 
									</p>
									<p>
										The following elements can go inside the <span class="element-highlight">&lt;head&gt;</span>:
									</p>
									<ul>
										<li><span class="element-highlight">&lt;title&gt;</span> - Adds title to the document </li>
										<li><span class="element-highlight">&lt;style&gt;</span> - Used to add CSS styling for the particular document</li>
										<li><span class="element-highlight">&lt;base&gt;</span> - Specifies a default URL and a default target for all links on a page</li>
										<li><span class="element-highlight">&lt;link&gt;</span> - Used to references the stylesheet for the document</li>
										<li><span class="element-highlight">&lt;meta&gt;</span> - Specifies page description, keywords, author and other information.</li>
										<li><span class="element-highlight">&lt;script&gt;</span> - Used to define JavaScript</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="meta">
						<div class="col-md-12">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>
										Meta elements are used to specify page descriptions, keywords, author, last modified and other information.
									</p>
									<p>
										<span class="element-highlight">&lt;meta&gt;</span> is used to provide such additional information. It is inserted between the <span class="element-highlight">&lt;head&gt;</span> tags. 
									</p>
									<p>
										A <span class="element-highlight">&lt;meta&gt;</span> tag can have the following attributes:
									</p>
									<ol>
										<li>
											<strong>Name</strong> - <br>
											Name can by anything including author of the document, keywords, description etc.
										</li>
										<li>
											<strong>content</strong> - <br>
											Gives the value associated with the http-equiv or name attribute
										</li>
										<li>
											<strong>http-equiv</strong> - <br>
											http-equiv can be used to refresh the page or to set a cookie.
										</li>
									</ol>
									<p>
										Example: <br>
										<span class="element-highlight">&lt;meta charset=&quot;UTF-8&quot;&gt;</span> <br>
										<span class="element-highlight">&lt;meta name=&quot;description&quot; content=&quot;Cheatsheet&quot;&gt;</span> <br>
										<span class="element-highlight">&lt;meta name=&quot;keywords&quot; content=&quot;Force24, Cheatsheet, Marketing Automation&quot;&gt;</span> <br>
										<span class="element-highlight">&lt;meta name=&quot;author&quot; content=&quot;Force24&quot;&gt;</span><br>
										<span class="element-highlight">&lt;meta name=&quot;viewport&quot; content=&quot;width=device-width, initial-scale=1.0&quot;&gt;</span>
									</p>
								</div>
							</div>
						</div>
					</div>


					<div class="row contentRow" id="paragraph">
						<div class="col-md-6">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>The <span class="element-highlight">&lt;p&gt;</span> tag defines a paragraph.</p>
									<p><span class="element-highlight">&lt;p&gt;</span>My first paragraph.<span class="element-highlight">&lt;/p&gt;</span></p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<h5 class="modal-title" id="paragraphModalLabel">Preview</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p class="preview-code">My first paragraph.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="anchor">
						<div class="col-md-6">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>The <span class="element-highlight">&lt;a&gt;</span> tag defines a link.</p>
									<p>The <span class="element-highlight">href</span> attribute specifies the destination address.</p>
									<p><span class="element-highlight">&lt;a href=&quot;https://www.force24.co.uk/&quot;&gt;</span>Visit our website.<span class="element-highlight">&lt;/a&gt;</span></p>
									<p>The <span class="element-highlight">target</span> attribute specifies where to open the linked document</p>
									<ul>
										<li>
										<span class="element-highlight">_blank</span> - Opens the linked document in a new window or tab
										</li>
										<li>
											<span class="element-highlight">_self</span> - Opens the linked document in the same window/tab as it was clicked
										</li>
										<li>
											<span class="element-highlight">_parent</span> - Opens the linked document in the parent frame
										</li>
										<li>
											<span class="element-highlight">_top</span> - Opens the linked document in the full body of the window
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<h5 class="modal-title" id="paragraphModalLabel">Preview</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p class="preview-code"><a href="https://www.force24.co.uk/" target="_blank">Visit our website</a></p>
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="headings">
						<div class="col-md-6">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>Headings are defined with the <span class="element-highlight">&lt;h1&gt;</span> to <span class="element-highlight">&lt;h6&gt;</span> tags.</p>
									<p><span class="element-highlight">&lt;h1&gt;</span> defines the biggest heading and <span class="element-highlight">&lt;h6&gt;</span> defines the smallest.</p>
									<p><span class="element-highlight">&lt;h1&gt;</span>Heading 1<span class="element-highlight">&lt;/h1&gt;</span></p>							<p><span class="element-highlight">&lt;h2&gt;</span>Heading 2<span class="element-highlight">&lt;/h2&gt;</span></p>
									<p><span class="element-highlight">&lt;h3&gt;</span>Heading 3<span class="element-highlight">&lt;/h3&gt;</span></p>
									<p><span class="element-highlight">&lt;h4&gt;</span>Heading 4<span class="element-highlight">&lt;/h4&gt;</span></p>
									<p><span class="element-highlight">&lt;h5&gt;</span>Heading 5<span class="element-highlight">&lt;/h5&gt;</span></p>
									<p><span class="element-highlight">&lt;h6&gt;</span>Heading 6<span class="element-highlight">&lt;/h6&gt;</span></p>		
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<h5 class="modal-title" id="paragraphModalLabel">Preview</h5>
							<div class="modal-style">
								<div class="modal-body">
									<h1>Heading 1</h1>
									<h2>Heading 2</h2>
									<h3>Heading 3</h3>
									<h4>Heading 4</h4>
									<h5>Heading 5</h5>
									<h6>Heading 6</h6>
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="images">
						<div class="col-md-6">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>HTML images are defined with the <span class="element-highlight">&lt;img&gt;</span> tag.</p>
									<p>The <span class="element-highlight">src</span> attribute specifies the path of the image.</p>
									<p>The <span class="element-highlight">alt</span> describes the image should the browser not find it.</p>
									<p>You can use the <span class="element-highlight">width</span> and <span class="element-highlight">height</span> attributes to define the width and height of the image in pixels.</p>
									<p><span class="element-highlight">&lt;img src=&quot;Force24.png&quot; alt=&quot;Force24&quot; width=&quot;200&quot;&gt;</span></p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<h5 class="modal-title" id="paragraphModalLabel">Preview</h5>
							<div class="modal-style">
								<div class="modal-body">
									<img src="images/f24_logo.png" width="200" alt="Force24 web tools">
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="lists">
						<div class="col-md-6">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>An unordered list starts with the <span class="element-highlight">&lt;ul&gt;</span> tag. Each list item starts with the <span class="element-highlight">&lt;li&gt;</span> tag. By default the items will be displayed with a black circular bullet.</span></span></p>
									<p>
										<span class="element-highlight">
											&lt;ul&gt; <br>
											&lt;li&gt;Dog&lt;/li&gt; <br>
											&lt;li&gt;Cat&lt;/li&gt; <br>
											&lt;li&gt;Fox&lt;/li&gt; <br>
											&lt;/ul&gt;
										</span>
									</p>
									<p>An ordered list starts with the <span class="element-highlight">&lt;ol&gt;</span> tag.</p>
									<p>
										<span class="element-highlight">
											&lt;ol&gt; <br>
											&lt;li&gt;Mouse&lt;/li&gt; <br>
											&lt;li&gt;Cow&lt;/li&gt; <br>
											&lt;li&gt;Giraffe&lt;/li&gt; <br>
											&lt;/ol&gt;
										</span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<h5 class="modal-title" id="paragraphModalLabel">Preview</h5>
							<div class="modal-style">
								<div class="modal-body">
									<ul>
										<li>Dog</li>
										<li>Cat</li>
										<li>Fox</li>
									</ul>
									<ol>
										<li>Mouse</li>
										<li>Cow</li>
										<li>Giraffe</li>
									</ol>
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="formatting">
						<div class="col-md-6">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p><span class="element-highlight">&lt;b&gt;</span> defines bold text</p>
									<p><span class="element-highlight">&lt;em&gt;</span> defines emphasized text</p>
									<p><span class="element-highlight">&lt;i&gt;</span> defines italic text</p>
									<p><span class="element-highlight">&lt;small&gt;</span> defines small text</p>
									<p><span class="element-highlight">&lt;strong&gt;</span> defines important text</p>
									<p><span class="element-highlight">&lt;sub&gt;</span> defines subscripted text</p>
									<p><span class="element-highlight">&lt;sup&gt;</span> defines superscripted text</p>
									<p><span class="element-highlight">&lt;ins&gt;</span> defines inserted text</p>
									<p><span class="element-highlight">&lt;del&gt;</span> defines deleted text</p>
									<p><span class="element-highlight">&lt;mark&gt;</span> defines highlighted text</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<h5 class="modal-title" id="paragraphModalLabel">Preview</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p><span class="element-highlight">&lt;b&gt;</span><b>Example text</b><span class="element-highlight">&lt;/b&gt;</span></p>
									<p><span class="element-highlight">&lt;em&gt;</span><em>Example text</em><span class="element-highlight">&lt;/em&gt;</span></p>
									<p><span class="element-highlight">&lt;i&gt;</span><i>Example text</i><span class="element-highlight">&lt;/i&gt;</span></p>
									<p><span class="element-highlight">&lt;small&gt;</span><small>Example text</small><span class="element-highlight">&lt;/small&gt;</span></p>
									<p><span class="element-highlight">&lt;strong&gt;</span><strong>Example text</strong><span class="element-highlight">&lt;/strong&gt;</span></p>
									<p><span class="element-highlight">&lt;sub&gt;</span><sub>Example text</sub><span class="element-highlight">&lt;/sub&gt;</span></p>
									<p><span class="element-highlight">&lt;sup&gt;</span><sup>Example text</sup><span class="element-highlight">&lt;/sup&gt;</span></p>
									<p><span class="element-highlight">&lt;ins&gt;</span><ins>Example text</ins><span class="element-highlight">&lt;/ins&gt;</span></p>
									<p><span class="element-highlight">&lt;del&gt;</span><del>Example text</del><span class="element-highlight">&lt;/del&gt;</span></p>
									<p><span class="element-highlight">&lt;mark&gt;</span><mark>Example text</mark><span class="element-highlight">&lt;/mark&gt;</span></p>
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="spans">
						<div class="col-md-6">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>
										The <span class="element-highlight">&lt;span&gt;</span> element is an inline tag for phrasing content. It has no meaning and is mostly used for styling by using and id or class.
									</p>
									<p>
									<span class="element-highlight">&lt;p&gt;</span>Force24 is a UK <span class="element-highlight">&lt;span style=&quot;color: #00a7c0;&quot;&gt;</span>Marketing Automation<span class="element-highlight">&lt;/span&gt;</span> company based in the Leeds.<span class="element-highlight">&lt;/p&gt;</span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<h5 class="modal-title" id="paragraphModalLabel">Preview</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>
										Force24 is a UK <span style="color: #00A7C0;">Marketing Automation</span> company based in the Leeds.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="classes-ids">
						<div class="col-md-6">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>
										The <span class="element-highlight">class</span> attribute is used to apply the same styles for elements containing the same class. The <span class="element-highlight">class</span> attribute is selected with CSS and/or JavaScript with a <span class="element-highlight">.</span> symbol
									</p>
									<p>
										The <span class="element-highlight">id</span> attribute specifies an unique id for an element. The <span class="element-highlight">id</span> attribute is selected with CSS and/or JavaScript with a <span class="element-highlight">#</span> symbol
									</p>
									<p>
										<span class="element-highlight">&lt;p&gt;</span>Force24 is a UK <span class="element-highlight">&lt;span class=&quot;force24Colour&quot;&gt;</span>Marketing Automation<span class="element-highlight">&lt;/span&gt;</span> company based in the Leeds.<span class="element-highlight">&lt;/p&gt;</span>
									</p>
									<p style="margin: 30px 0 0 0;">
										Example of <span class="element-highlight">class</span>:
									</p>
									<p>
										<span class="element-highlight">&lt;p&gt;</span>Force24 is a UK <span class="element-highlight">&lt;span class=&quot;force24Colour&quot;&gt;</span>Marketing Automation<span class="element-highlight">&lt;/span&gt;</span> company based in the Leeds.<span class="element-highlight">&lt;/p&gt;</span>
									</p>
									<p>
										<span class="element-highlight">&lt;p&gt;</span>We offer <span class="element-highlight">&lt;span class=&quot;force24Colour&quot;&gt;</span>Customer journey optimisation advice<span class="element-highlight">&lt;/span&gt;</span>.<span class="element-highlight">&lt;/p&gt;</span>
									</p>
									<p style="margin: 30px 0 0 0;">
										Example of <span class="element-highlight">id</span>:
									</p>
									<p>
										<span class="element-highlight">&lt;p&gt;</span>Force24 is a UK <span class="element-highlight">&lt;span id=&quot;bold&quot;&gt;</span>Marketing Automation<span class="element-highlight">&lt;/span&gt;</span> company based in the Leeds.<span class="element-highlight">&lt;/p&gt;</span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<h5 class="modal-title" id="paragraphModalLabel">Preview</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>
										Force24 is a UK <span style="color: #00A7C0;">Marketing Automation</span> company based in the Leeds.
									</p>
									<p>
										We offer <span style="color: #00A7C0;">Customer journey optimisation advice</span>.
									</p>
									<p>
										Force24 is a UK <span style="font-weight: bold;">Marketing Automation</span> company based in the Leeds.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="divs">
						<div class="col-md-12">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>
										The <span class="element-highlight">&lt;div&gt;</span> (short for division) tag is used as a container for other elements to perform certain tasks or style them with CSS. Since <span class="element-highlight">&lt;div&gt;</span> is a block element, each <span class="element-highlight">&lt;div&gt;</span> will be shown on a new line.
									</p>
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="forms">
						<div class="col-md-6">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>
										The <span class="element-highlight">&lt;form&gt;</span> element defines a form that collects user input.
									</p>
									<p>
										The Form contains different type of elements like text inputs, large text inputs, checkboxes, radio buttons, submit buttons and more.
									</p>
									<p>
										<span class="element-highlight">&lt;input type=&quot;text&quot;&gt;</span> defines an input field for text input.
									</p>
									<p>
										<span class="element-highlight">&lt;input type=&quot;radio&quot;&gt;</span> defines a checkbox which lets the user select only ONE choice.
									</p>
									<p>
										<span class="element-highlight">&lt;input type=&quot;checkbox&quot;&gt;</span> defines a checkbox which lets the user select multople choices.
									</p>
									<p>
										<span class="element-highlight">&lt;textarea&gt;</span> defines a text area which can be used for larger inputs.
									</p>
									<p>
										<span class="element-highlight">&lt;select&gt;</span> defines a dropdown menu containing options.
									</p>
									<p>
										<span class="element-highlight">&lt;input type=&quot;submit&quot;&gt;</span> defines a button for submitting the form.
									</p>
									<p>
										<span class="element-highlight">&lt;label&gt;</span> defines a text label for the input.
									</p>
									<p>
										<span class="element-highlight">name=&quot;&quot;</span> specifies the name of the input and is used to reference elements in JavaScript <br>
										<span class="element-highlight">value=&quot;&quot;</span> defines the default value of the input field 
									</p>
									<p>
										<span class="element-highlight">&lt;form&gt;</span> <br>
										&nbsp;&nbsp;<span class="element-highlight">&lt;input type=&quot;text&quot; name=&quot;fullName&quot; placeholder=&quot;Enter Full Name&quot;&gt;</span> <br>
										&nbsp;&nbsp;<span class="element-highlight">&lt;input type=&quot;radio&quot; value=&quot;Female&quot; name=&quot;gender&quot;&gt; Female</span> <br>
										&nbsp;&nbsp;<span class="element-highlight">&lt;input type=&quot;radio&quot; value=&quot;Male&quot; name=&quot;gender&quot;&gt; Male</span> 
										<br>
										&nbsp;&nbsp;<span class="element-highlight">&lt;label&gt;Age&lt;/label&gt;</span> <br>
										&nbsp;&nbsp;<span class="element-highlight">&lt;select name=&quot;age&quot;&gt;</span> <br>
										&nbsp;&nbsp;<span class="element-highlight">&lt;option value=&quot;Under 18&quot;&gt;Under 18&lt;/option&gt;</span>
										<br>
										&nbsp;&nbsp;<span class="element-highlight">&lt;option value=&quot;18+&quot;&gt;Under 18+&lt;/option&gt;</span>
										<br>
										&nbsp;&nbsp;<span class="element-highlight">&lt;/select&gt;</span> 
										<br>
										&nbsp;&nbsp;<span class="element-highlight">&lt;input type=&quot;submit&quot; value=&quot;Submit&quot;&gt;</span> <br>
										<span class="element-highlight">&lt;/form&gt;</span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<h5 class="modal-title" id="paragraphModalLabel">Preview</h5>
							<div class="modal-style">
								<div class="modal-body">
									<form action="">
										<input type="text" placeholder="Enter Full Name"> <br>
										<input type="radio" name="gender" value="Female"> Female <br>
										<input type="radio" name="gender" value="Male"> Male <br>
										<label for="">Age</label> <br>
										<select name="" id="">
											<option value="">Under 18</option>
											<option value="">18+</option>
										</select> <br>
										<input type="submit" value="Submit" disabled="disabled" style="cursor: pointer">
									</form>
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="tables">
						<div class="col-md-6">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>A table is defined with the <span class="element-highlight">&lt;table&gt;</span> tag.</p>
									<p>Each table row is defined with the <span class="element-highlight">&lt;tr&gt;</span> tag. A table header is defined with the <span class="element-highlight">&lt;th&gt;</span> and each cell is defined with the <span class="element-highlight">&lt;td&gt;</span> tag.</p>
									<p>
										<span class="element-highlight">&lt;table&gt; <br>
										&nbsp;&nbsp; &lt;tr&gt; <br>
										&nbsp;&nbsp;&nbsp;&nbsp; &lt;th&gt; First name &lt;/th&gt;<br>
										&nbsp;&nbsp;&nbsp;&nbsp; &lt;th&gt; Last name &lt;/th&gt;<br>
										&nbsp;&nbsp;&nbsp;&nbsp; &lt;th&gt; Age &lt;/th&gt;<br>
										&nbsp;&nbsp; &lt;/tr&gt; <br>
										&nbsp;&nbsp; &lt;tr&gt; <br>
										&nbsp;&nbsp;&nbsp;&nbsp; &lt;td&gt; John &lt;/td&gt;<br>
										&nbsp;&nbsp;&nbsp;&nbsp; &lt;td&gt; Doe &lt;/td&gt;<br>
										&nbsp;&nbsp;&nbsp;&nbsp; &lt;td&gt; 34 &lt;/td&gt;<br>
										&nbsp;&nbsp; &lt;/tr&gt; <br>
										&nbsp;&nbsp; &lt;tr&gt; <br>
										&nbsp;&nbsp;&nbsp;&nbsp; &lt;td&gt; Martin &lt;/td&gt;<br>
										&nbsp;&nbsp;&nbsp;&nbsp; &lt;td&gt; Johnson &lt;/td&gt;<br>
										&nbsp;&nbsp;&nbsp;&nbsp; &lt;td&gt; 61 &lt;/td&gt;<br>
										&nbsp;&nbsp; &lt;/tr&gt; <br>
										&lt;/table&gt;</span>
									</p>
								</div>
							</div>
						</div>
						<div class="col-md-6">
						<h5 class="modal-title" id="paragraphModalLabel">Preview</h5>
							<div class="modal-style">
								<div class="modal-body">
									<table style="border: 1px solid #333333; border-collapse: collapse;" cellpadding="1" cellspacing="1">
										<tr style="border: 1px solid #333333">
											<th style="border: 1px solid #333333; padding: 5px;">First name</th>
											<th style="border: 1px solid #333333; padding: 5px;">Last name</th>
											<th style="border: 1px solid #333333; padding: 5px;">Age</th>
										</tr>
										<tr style="border: 1px solid #333333">
											<td style="border: 1px solid #333333; padding: 5px;">John</td>
											<td style="border: 1px solid #333333; padding: 5px;">Doe</td>
											<td style="border: 1px solid #333333; padding: 5px;">34</td>
										</tr>
										<tr style="border: 1px solid #333333">
											<td style="border: 1px solid #333333; padding: 5px;">Martin</td>
											<td style="border: 1px solid #333333; padding: 5px;">Johnson</td>
											<td style="border: 1px solid #333333; padding: 5px;">61</td>
										</tr>
									</table>
								</div>
							</div>
						</div>
					</div>

					<div class="row contentRow" id="miscellaneous">
						<div class="col-md-12">
							<h5 class="modal-title" id="paragraphModalLabel">Code</h5>
							<div class="modal-style">
								<div class="modal-body">
									<p>
										<span class="element-highlight">&lt;br&gt;</span> - Inserts a new line <br>
										<span class="element-highlight">&lt;hr&gt;</span> - Inserts a horizontal line
									</p>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>





<script>
	document.addEventListener("DOMContentLoaded", function() {
      document.body.classList.add("cheat-sheet");
    });
</script>
<?php
	require_once('includes/footer.php');
?> 