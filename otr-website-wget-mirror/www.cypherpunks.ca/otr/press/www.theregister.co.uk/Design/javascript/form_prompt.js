// form_prompt.js
// 
// prompt for a form textbox by putting a description in there initially, but
// remove this as soon as the user focusses it for typing genuine content
// 
// by Smylers


function SetPromptText(ID, Text)
// sets the element with the specified ID to have the specified prompt text;
// better than simply hardcoding the prompt text with a value="" attribute on
// that element, so that the text only appears in JavaScript-enabled browsers
// (where it magically disappears) and doesn't get in the way of those without
// JavaScript
{
  var Textbox = document.getElementById(ID);

  // Only set the prompt text if the box is currently empty; reloading the page
  // or moving back to it may mean there's already content in there, in which
  // case it should be left alone:
  if (Textbox.value == '')
    Textbox.value = Text;

  // If it currently contains a value that isn't the default text then just
  // leave it alone:
  else if (Textbox.value != Text)
    return;

  // Either the default text has just been set, or the page has been reloaded
  // with the default text in it carried over from last time.  In either case
  // set up an event handler that will clear the text as soon as the box is
  // focussed:
  Textbox.onfocus = function() { ClearPromptText(Textbox) };
}

function ClearPromptText(Textbox)
// clears the text from the specified textbox -- assumed to have been invoked
// from its onfocus event handler -- and disables the event handler so that
// this doesn't get invoked again and clear any text the user types
{
  Textbox.value = '';
  Textbox.onfocus = null;
}
