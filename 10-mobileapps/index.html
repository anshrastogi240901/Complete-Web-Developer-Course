<!DOCTYPE html>
<html>
  <head>
    <title>My App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
    <link rel="stylesheet" href="app.min.css">
    <style>
      ul.colour-picker li {
				position: relative;
				display: block;
				float: left;
				height: 54px;
				width: 25%;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
			}
			ul.colour-picker li[data-colour="teal"] {
				background: #2B9;
			}
			ul.colour-picker li[data-colour="green"] {
				background: #3C7;
			}
			ul.colour-picker li[data-colour="yellow"] {
				background: #EC1;
			}
			ul.colour-picker li[data-colour="orange"] {
				background: #E82;
			}
			ul.colour-picker li[data-colour="red"] {
				background: #E54;
			}
			ul.colour-picker li[data-colour="blue"] {
				background: #39D;
			}
			ul.colour-picker li[data-colour="dark-blue"] {
				background: #345;
			}
			ul.colour-picker li[data-colour="white"] {
				background: #FFF;
			}
			ul.colour-picker li.active:before {
				position: absolute;
				height: 100%;
				width: 100%;
				background: rgba(0,0,0,0.1);
				content: "";
			}

			@-webkit-keyframes pulse {
				0% {
					background-color: #CCC;
				}
				25% {
					background-color: #EEE;
				}
				50% {
					background-color: #CCC;
				}
				75% {
					background-color: #EEE;
				}
				100% {
					background-color: #CCC;
				}
			}
			.scroll-page .loading {
				margin: 12px auto;
				border: 8px solid #AAA;
				height: 16px;
				width: 16px;
				background: #CCC;
				border-radius: 16px;
				-webkit-animation: pulse 2s ease-in-out 0s infinite;
			}
    </style>
  </head>

  <body>
    <div class="app-page" data-page="home">
      <div class="app-topbar">
        <div class="app-title">Home page</div>
      </div>
      <div class="app-content">
          <p class="app-section">
					Welcome to the App.js default theme. Click around to see what each widget looks like.
				</p>
          <div class="app-section">
					<b>Topbar colours:</b><br>
					<ul class="colour-picker">
						<li data-colour="teal"></li>
						<li data-colour="green"></li>
						<li data-colour="yellow"></li>
						<li data-colour="orange"></li>
						<li data-colour="red"></li>
						<li data-colour="blue"></li>
						<li data-colour="dark-blue"></li>
						<li data-colour="white"></li>
						<div class="clear"></div>
					</ul>
				</div>
          
          <div class="app-section">
					<div class="app-button" data-target="lists">Lists</div>
					<div class="app-button" data-target="buttons">Buttons</div>
					<div class="app-button" data-target="inputs">Inputs</div>
					<div class="app-button" data-target="scroll">Scrolling</div>
				</div>
          
        <div class="app-section">
          <div class="app-button" data-target="page2">Go to Page 2</div>
        </div>
      </div>
    </div>

    <div class="app-page" data-page="page2">
      <div class="app-topbar">
        <div class="app-button left" data-back data-autotitle></div>
        <div class="app-title">Page 2</div>
      </div>
      <div class="app-content">
        Page 2 is lonely
      </div>
    </div>
      
      <div class="app-page" data-page="lists">
			<div class="app-topbar">
				<div class="left app-button" data-back data-autotitle></div>
				<div class="app-title"><span class="app-icon"></span>Lists</div>
			</div>

			<div class="app-content">
				<ul class="app-list">
					<label>Label 1</label>
					<li class="app-button" data-target="lists">Item 1</li>
					<li class="app-button">Item 2</li>
					<li class="app-button">Item 3</li>
					<label>Label 2</label>
					<li>Item 4</li>
					<li>Item 5</li>
					<li>Item 6</li>
					<label>Label 3</label>
					<li>Item 7</li>
					<li>Item 8</li>
					<li>Item 9</li>
					<label>Label 4</label>
					<li>Item 10</li>
					<li>Item 11</li>
					<li>Item 12</li>
					<label>Label 5</label>
					<li>Item 13</li>
					<li>Item 14</li>
					<li>Item 15</li>
				</ul>
			</div>
		</div>

		<div class="app-page" data-page="buttons">
			<div class="app-topbar">
				<div class="left app-button" data-back data-autotitle></div>
				<div class="app-title"><span class="app-icon"></span>Buttons</div>
				<div class="right app-button app-menu">Dialog</div>
			</div>

			<div class="app-content">
				<div class="app-section">
					<ul class="app-list">
						<li class="app-button">Item 1</li>
						<li class="app-button">Item 2</li>
						<li class="app-button">Item 3</li>
					</ul>
				</div>

				<div class="app-section">
					<div class="app-button red">Button 1</div>
					<div class="app-button green">Button 2</div>
					<div class="app-button blue">Button 3</div>
				</div>
			</div>
		</div>

    <script src="zepto.js"></script>
    <script src="app.min.js"></script>
    <script>
        
        var oldColour = "";
        
        function setupPageColour(page) {
            
            $(page).find('ul.colour-picker li')
					.clickable()
					.on('click', function () {
						var colour = $(this).data('colour');
                        if (oldColour != "") {
                            $(".app-topbar").removeClass(oldColour);
                        }
                        $(".app-topbar").addClass(colour);
                        oldColour = colour;
                        
            });
            
            
        }
        
      App.controller('home', function (page) {
        setupPageColour(page);
          
      });

      App.controller('page2', function (page) {
        setupPageColour(page);
      });
        
        App.controller('lists', function (page) {
        setupPageColour(page);
      });
        
        App.controller('buttons', function (page) {
        setupPageColour(page);
            
            $(page).find('.app-menu')
					.on('click', function () {
						App.dialog({
							doButton     : 'Do Something' ,
							otherButton  : 'Or Another Thing'  ,
							okButton     : 'Share on Kik' ,
							cancelButton : 'Cancel'
						}, function (choice) {
							console.log(choice);
						});
					});
            
      });

      try {
        App.restore();
      } catch (err) {
        App.load('home');
      }
    </script>
  </body>
</html>
