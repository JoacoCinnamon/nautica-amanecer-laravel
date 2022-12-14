/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/welcome.js":
/*!*********************************!*\
  !*** ./resources/js/welcome.js ***!
  \*********************************/
/***/ (() => {

eval("var navbar = document.querySelector(\".navbar\");\nvar welcome = document.querySelector(\".welcome\");\nvar navbarToggle = document.querySelector(\"#navbarSupportedContent\");\nvar resizeBakgroundImg = function resizeBakgroundImg() {\n  var height = window.innerHeight - navbar.clientHeight;\n  welcome.style.height = \"\".concat(height, \"px\");\n};\nnavbarToggle.ontransitionend = resizeBakgroundImg;\nnavbarToggle.ontransitionstart = resizeBakgroundImg;\nwindow.onresize = resizeBakgroundImg;\nwindow.onload = resizeBakgroundImg;\ndocument.querySelector(\"main\").classList.remove(\"py-4\");\nconsole.log(document.querySelector(\"main\").classList);//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJuYXZiYXIiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJ3ZWxjb21lIiwibmF2YmFyVG9nZ2xlIiwicmVzaXplQmFrZ3JvdW5kSW1nIiwiaGVpZ2h0Iiwid2luZG93IiwiaW5uZXJIZWlnaHQiLCJjbGllbnRIZWlnaHQiLCJzdHlsZSIsIm9udHJhbnNpdGlvbmVuZCIsIm9udHJhbnNpdGlvbnN0YXJ0Iiwib25yZXNpemUiLCJvbmxvYWQiLCJjbGFzc0xpc3QiLCJyZW1vdmUiLCJjb25zb2xlIiwibG9nIl0sInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy93ZWxjb21lLmpzPzI2ZDIiXSwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgbmF2YmFyID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5uYXZiYXJcIik7XHJcbmNvbnN0IHdlbGNvbWUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLndlbGNvbWVcIik7XHJcbmNvbnN0IG5hdmJhclRvZ2dsZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjbmF2YmFyU3VwcG9ydGVkQ29udGVudFwiKTtcclxuXHJcbmNvbnN0IHJlc2l6ZUJha2dyb3VuZEltZyA9ICgpID0+IHtcclxuICAgIGNvbnN0IGhlaWdodCA9IHdpbmRvdy5pbm5lckhlaWdodCAtIG5hdmJhci5jbGllbnRIZWlnaHQ7XHJcbiAgICB3ZWxjb21lLnN0eWxlLmhlaWdodCA9IGAke2hlaWdodH1weGA7XHJcbn07XHJcblxyXG5uYXZiYXJUb2dnbGUub250cmFuc2l0aW9uZW5kID0gcmVzaXplQmFrZ3JvdW5kSW1nO1xyXG5uYXZiYXJUb2dnbGUub250cmFuc2l0aW9uc3RhcnQgPSByZXNpemVCYWtncm91bmRJbWc7XHJcbndpbmRvdy5vbnJlc2l6ZSA9IHJlc2l6ZUJha2dyb3VuZEltZztcclxud2luZG93Lm9ubG9hZCA9IHJlc2l6ZUJha2dyb3VuZEltZztcclxuZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIm1haW5cIikuY2xhc3NMaXN0LnJlbW92ZShcInB5LTRcIik7XHJcbmNvbnNvbGUubG9nKGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCJtYWluXCIpLmNsYXNzTGlzdCk7XHJcbiJdLCJtYXBwaW5ncyI6IkFBQUEsSUFBTUEsTUFBTSxHQUFHQyxRQUFRLENBQUNDLGFBQWEsQ0FBQyxTQUFTLENBQUM7QUFDaEQsSUFBTUMsT0FBTyxHQUFHRixRQUFRLENBQUNDLGFBQWEsQ0FBQyxVQUFVLENBQUM7QUFDbEQsSUFBTUUsWUFBWSxHQUFHSCxRQUFRLENBQUNDLGFBQWEsQ0FBQyx5QkFBeUIsQ0FBQztBQUV0RSxJQUFNRyxrQkFBa0IsR0FBRyxTQUFyQkEsa0JBQWtCLEdBQVM7RUFDN0IsSUFBTUMsTUFBTSxHQUFHQyxNQUFNLENBQUNDLFdBQVcsR0FBR1IsTUFBTSxDQUFDUyxZQUFZO0VBQ3ZETixPQUFPLENBQUNPLEtBQUssQ0FBQ0osTUFBTSxhQUFNQSxNQUFNLE9BQUk7QUFDeEMsQ0FBQztBQUVERixZQUFZLENBQUNPLGVBQWUsR0FBR04sa0JBQWtCO0FBQ2pERCxZQUFZLENBQUNRLGlCQUFpQixHQUFHUCxrQkFBa0I7QUFDbkRFLE1BQU0sQ0FBQ00sUUFBUSxHQUFHUixrQkFBa0I7QUFDcENFLE1BQU0sQ0FBQ08sTUFBTSxHQUFHVCxrQkFBa0I7QUFDbENKLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLE1BQU0sQ0FBQyxDQUFDYSxTQUFTLENBQUNDLE1BQU0sQ0FBQyxNQUFNLENBQUM7QUFDdkRDLE9BQU8sQ0FBQ0MsR0FBRyxDQUFDakIsUUFBUSxDQUFDQyxhQUFhLENBQUMsTUFBTSxDQUFDLENBQUNhLFNBQVMsQ0FBQyIsImZpbGUiOiIuL3Jlc291cmNlcy9qcy93ZWxjb21lLmpzLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/welcome.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/welcome.js"]();
/******/ 	
/******/ })()
;