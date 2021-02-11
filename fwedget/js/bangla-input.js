var matched, browser;

jQuery.uaMatch = function(ua) {
  ua = ua.toLowerCase();

  var match = /(chrome)[ \/]([\w.]+)/.exec(ua) ||
  /(webkit)[ \/]([\w.]+)/.exec(ua) ||
  /(opera)(?:.*version|)[ \/]([\w.]+)/.exec(ua) ||
  /(msie) ([\w.]+)/.exec(ua) ||
  ua.indexOf("compatible") < 0 && /(mozilla)(?:.*? rv:([\w.]+)|)/.exec(ua) || [];

  return {
    browser: match[1] || "",
    version: match[2] || "0"
  };
};

matched = jQuery.uaMatch(navigator.userAgent);
browser = {};

if (matched.browser) {
  browser[matched.browser] = true;
  browser.version = matched.version;
}

// Chrome is Webkit, but Webkit is also Safari.
if (browser.chrome) {
  browser.webkit = true;
} else if (browser.webkit) {
  browser.safari = true;
}

jQuery.browser = browser;

/**
 * Phonetic driver to be used with BanglaInputManager jQuery Plugin developed by Ekushey
 * This is set as default driver for BIM plugin
 * 
 * @author: Hasin Hayder from Ekushey Team
 * @version: 0.1
 * @license: New BSD License
 * @date: 2010-03-08 [8th March, 2010]
 * 
 * Contact at [hasin: countdraculla@gmail.com, manchu: manchumahara@gmail.com, omi: omi: omiazad@gmail.com]
 */
 var phonetic = {
  keymaps: {
    'k': '\u0995',
    '0': '\u09E6',
    '1': '\u09E7',
    '2': '\u09E8',
    '3': '\u09E9',
    '4': '\u09EA',
    '5': '\u09EB',
    '6': '\u09EC',
    '7': '\u09ED',
    '8': '\u09EE',
    '9': '\u09EF',
    'i': '\u09BF',
    'I': '\u0987',
    'ii': '\u09C0',
    'II': '\u0988',
    'e': '\u09C7',
    'E': '\u098F',
    'U': '\u0989',
    'u': '\u09C1',
    'uu': '\u09C2',
    'UU': '\u098A',
    'r': '\u09B0',
    'WR': '\u098B',
    'a': '\u09BE',
    'A': '\u0986',
    'ao': '\u0985',
    'Ao': '\u0985',
    's': '\u09B8',
    't': '\u099F',
    'K': '\u0996',
    'kh': '\u0996',
    'n': '\u09A8',
    'N': '\u09A3',
    'T': '\u09A4',
    'Th': '\u09A5',
    'd': '\u09A1',
    'dh': '\u09A2',
    'b': '\u09AC',
    'bh': '\u09AD',
    'v': '\u09AD',
    'R': '\u09DC',
    'Rh': '\u09DD',
    'g': '\u0997',
    'G': '\u0998',
    'gh': '\u0998',
    'h': '\u09B9',
    'NG': '\u099E',
    'j': '\u099C',
    'J': '\u099D',
    'jh': '\u099D',
    'c': '\u099A',
    'ch': '\u099B',
    'C': '\u099B',
    'th': '\u09A0',
    'p': '\u09AA',
    'f': '\u09AB',
    'ph': '\u09AB',
    'D': '\u09A6',
    'Dh': '\u09A7',
    'z': '\u09AF',
    'y': '\u09DF',
    'Ng': '\u0999',
    'ng': '\u0982',
    'l': '\u09B2',
    'm': '\u09AE',
    'sh': '\u09B6',
    'S': '\u09B7',
    'O': '\u0993',
    'ou': '\u099C',
    'OU': '\u0994',
    'Ou': '\u0994',
    'Oi': '\u0990',
    'OI': '\u0990',
    'tt': '\u09CE',
    'H': '\u0983',
    '.': '\u0964',
    '..': '\u002E',
    'HH': '\u09CD\u200C',
    'NN': '\u0981',
    'Y': '\u09CD\u09AF',
    'w': '\u09CD\u09AC',
    'W': '\u09C3',
    'wr': '\u09C3',
    'x': '\u0995\u09CD\u09B8',
    'rY': '\u09B0\u200D\u09CD\u09AF',
    'L': '\u09B2',
    'Z': '\u09AF',
    'P': '\u09AA',
    'V': '\u09AD',
    'B': '\u09AC',
    'M': '\u09AE',
    'X': '\u0995\u09CD\u09B8',
    'F': '\u09AB',
    "+": '\u09CD',
    "++": "+",
    "o": '\u09CB',
    "oI": '\u09C8',
    "oU": "\u09CC"
  },
  supportIntellisense: true,
  intellisense: function(currentinput, lastcarry) {
    var vowels = 'aIiUuoiiouueEiEu';
    if ((vowels.indexOf(lastcarry) != -1 && vowels.indexOf(currentinput) != -1) || (lastcarry == " " && vowels.indexOf(currentinput) != -1)) {
      //let's check for dhirgho i kar and dhirgho u kar :P  
      carry = lastcarry + currentinput;
      if (carry == 'ii' || carry == 'uu')
        newkeystring = currentinput;
      else
        newkeystring = currentinput.toUpperCase();

      newcarry = lastcarry + newkeystring;
      mods = {
        keystring: newkeystring,
        carry: newcarry
      }
      return mods;
    }
    return false;
  }
};

/**
 * Probhat driver to be used with BanglaInputManager jQuery Plugin developed by Ekushey
 *
 * @author: Manchu Mahara from Ekushey Team
 * @version: 0.1
 * @license: New BSD License
 * @date: 2010-03-08 [8th March, 2010]
 *
 * Contact at [hasin: countdraculla@gmail.com, manchu: manchumahara@gmail.com, omi: omi: omiazad@gmail.com]
 */
 var probhat = {
  keymaps: {
    '`': '\u200D',
    '~': '\u007E',
    '1': '\u09E7',
    '2': '\u09E8',
    '3': '\u09E9',
    '4': '\u09EA',
    '5': '\u09EB',
    '6': '\u09EC',
    '7': '\u09ED',
    '8': '\u09EE',
    '9': '\u09EF',
    '0': '\u09E6',
    '-': '\u002D',
    '=': '\u003D',
    '!': '\u0021',
    '@': '\u0040',
    '#': '\u0023',
    '$': '\u09F3',
    '%': '\u0025',
    '^': '\u005E',
    '&': '\u099E',
    '*': '\u09CE',
    '(': '\u0028',
    ')': '\u0029',
    '_': '\u005F',
    '+': '\u002B',
    'q': '\u09A6',
    'Q': '\u09A7',
    'w': '\u09C2',
    'W': '\u098A',
    'e': '\u09C0',
    'E': '\u0988',
    'r': '\u09B0',
    'R': '\u09DC',
    't': '\u099F',
    'T': '\u09A0',
    'y': '\u098F',
    'Y': '\u0990',
    'u': '\u09C1',
    'U': '\u0989',
    'i': '\u09BF',
    'I': '\u0987',
    'o': '\u0993',
    'O': '\u0994',
    'p': '\u09AA',
    'P': '\u09AB',
    '[': '\u09C7',
    '{': '\u09C8',
    ']': '\u09CB',
    '}': '\u09CC',
    '\\': '\u200C',
    '|': '\u0965',
    'a': '\u09BE',
    'A': '\u0985',
    's': '\u09B8',
    'S': '\u09B7',
    'd': '\u09A1',
    'D': '\u09A2',
    'f': '\u09A4',
    'F': '\u09A5',
    'g': '\u0997',
    'G': '\u0998',
    'h': '\u09B9',
    'H': '\u0983',
    'j': '\u099C',
    'J': '\u099D',
    'k': '\u0995',
    'K': '\u0996',
    'l': '\u09B2',
    'L': '\u0982',
    ';': '\u003B',
    ':': '\u003A',
    'z': '\u09DF',
    'Z': '\u09AF',
    'x': '\u09B6',
    'X': '\u09DD',
    'c': '\u099A',
    'C': '\u099B',
    'v': '\u0986',
    'V': '\u098B',
    'b': '\u09AC',
    'B': '\u09AD',
    'n': '\u09A8',
    'N': '\u09A3',
    'm': '\u09AE',
    'M': '\u0999',
    ',': '\u002C',
    '<': '\u09C3',
    '.': '\u0964',
    '..': '\u0965',
    '>': '\u0981',
    '/': '\u09CD',
    '?': '\u003F'
  },
  supportIntellisense: false
};

/**
 * BanglaInputManager jQuery Plugin for typing bangla into web pages. 
 * This is the main engine and require any one or more of the following drivers
 * like phonetic, probhat, unijoy or inscript.
 * 
 * @author: Hasin Hayder from Ekushey Team
 * @version: 0.11
 * @license: New BSD License
 * @date: 2010-03-08 [8th March, 2010]
 * 
 * Contact at [hasin: countdraculla@gmail.com, manchu: manchumahara@gmail.com, omi: omi: omiazad@gmail.com]
 *
 * Changelog
 * Nov 21, 2010 - Fixed switch key browser incompatibility issue reported by Manchu and Sarim Khan.
 */
 $.browser.chrome = /chrome/.test(navigator.userAgent.toLowerCase());
 (function($) {
  var opts;
  var common = 1;
  var switched = 0;
  var ctrlPressed;
  var lastInsertedString = "";
  var writingMode = "b";
  var carry;
  var switchKey = "y";

  $.fn.bnKb = function(options) {
    var defaults = {
      "switchkey": {
        "webkit": "k",
        "mozilla": "y",
        "safari": "k",
        "chrome": "k",
        "msie": "y"
      },
      "driver": phonetic
    };
    // Extend our default options with those provided.
    opts = $.extend(defaults, options);
    writingMode = "b";
    carry = "";
    $(this).unbind("keypress keydown keyup");

    $(this).keyup($.fn.bnKb.ku);
    $(this).keydown($.fn.bnKb.kd);
    $(this).keypress($.fn.bnKb.kp);

    /* Browser Specific Switch Key fix - Thanks to Sarim Khan */
    if ($.browser.chrome) switchKey = opts.switchkey.chrome;
    else if ($.browser.safari || $.browser.safari) switchKey = opts.switchkey.webkit;
    else if ($.browser.msie) switchKey = opts.switchkey.msie;
    else if ($.browser.mozilla) switchKey = opts.switchkey.mozilla;

  }

  /**
   * handle keypress event
   * @param event ev
   */
   $.fn.bnKb.kp = function(ev) {
    var keycode = ev.which;
    var keycode = ev.keyCode ? ev.keyCode : ev.which;
    var keystring = String.fromCharCode(keycode);
    //lets check if writing mode is english. if so, dont process anything
    if (writingMode == "e")
      return true;
    //end mode check


    if (ctrlPressed)
      $("#stat").html("Not Processing");
    else {
      var _carry = carry;
      carry += keystring;
      //processing intellisense
      if (opts.driver.supportIntellisense) {
        var mods = opts.driver.intellisense(keystring, _carry);
        if (mods) {
          keystring = mods.keystring
          carry = mods.carry;
        }
      }
      //end intellisense


      var replacement = opts.driver.keymaps[carry];
      if (replacement) {
        $.fn.bnKb.iac(this, replacement, 1);
        ev.stopPropagation();
        return false;
      }
      //carry processing end

      //if no equivalent is found for carry, then try it with relpacement itself
      replacement = opts.driver.keymaps[keystring];
      carry = keystring;
      if (replacement) {
        $.fn.bnKb.iac(this, replacement, 0);
        ev.stopPropagation();
        return false;
      }

      //nothing found, leave it as is
      lastInsertedString = "";
      return true;
    }
  }

  /**
   * handle keydown event
   * @param {event} ev
   */
   $.fn.bnKb.kd = function(ev) {
    var keycode = ev.keyCode ? ev.keyCode : ev.which;
    var keystring = String.fromCharCode(keycode).toLowerCase();
    if (keycode == 17 || keycode == 224 || keycode == 91) {
      ctrlPressed = true;
    }
    //lets check if user pressed the switchkey, then toggle the writing mode
    if (ctrlPressed && keystring == switchKey) {
      //console.log("Switching");
      (writingMode == "b") ? writingMode = "e": writingMode = "b";
    }
    //end processing switchkey
  }

  /**
   * handle keyup event
   * @param event ev
   */
   $.fn.bnKb.ku = function(ev) {
    var keycode = ev.keyCode ? ev.keyCode : ev.which;
    if (keycode == 17 || keycode == 224 || keycode == 91) {
      ctrlPressed = false;
    }

  }


  /**
   * insert some string at current cursor position in a textarea or textbox
   * @param DOMElement obj
   * @param string input the string to insert in the textarea or textbox at cursor's current location
   * @param int length to shift
   * @param int type 0 for normal insertion, 1 for conjunct insertion
   */
   $.fn.bnKb.iac = function(obj, input, type) {
    var myField = obj;
    var myValue = input;

    len = lastInsertedString.length;
    if (!type)
      len = 0;
    if (document.selection) {
      myField.focus();
      sel = document.selection.createRange();
      if (myField.value.length >= len) { // here is that first conjunction bug in IE, if you use the > operator
        sel.moveStart('character', -1 * (len));
      }
      sel.text = myValue;
      sel.collapse(true);
      sel.select();
    }
    //MOZILLA/NETSCAPE support
    else {
      if (myField.selectionStart || myField.selectionStart == 0) {
        myField.focus();
        var startPos = myField.selectionStart - len;
        var endPos = myField.selectionEnd;
        var scrollTop = myField.scrollTop;
        startPos = (startPos == -1 ? myField.value.length : startPos);
        myField.value = myField.value.substring(0, startPos) +
        myValue +
        myField.value.substring(endPos, myField.value.length);
        myField.focus();
        myField.selectionStart = startPos + myValue.length;
        myField.selectionEnd = startPos + myValue.length;
        myField.scrollTop = scrollTop;
      } else {
        var scrollTop = myField.scrollTop;
        myField.value += myValue;
        myField.focus();
        myField.scrollTop = scrollTop;
      }
    }
    lastInsertedString = myValue;
  }

})(jQuery);

$(document).on("click", ".bangla", function(e) {

  $(".bangla").bnKb({
    'switchkey': {
      "webkit": "k",
      "mozilla": "y",
      "safari": "k",
      "chrome": "k",
      "msie": "y"
    },
    'driver': phonetic
  });
});

function enablePhonetic() {
  $(".unijoy").bnKb({
    'switchkey': {
      "webkit": "k",
      "mozilla": "y",
      "safari": "k",
      "chrome": "k",
      "msie": "y"
    },
    'driver': phonetic
  });
}

function enableProbhat() {
  $(".unijoy").bnKb({
    'switchkey': {
      "webkit": "k",
      "mozilla": "y",
      "safari": "k",
      "chrome": "k",
      "msie": "y"
    },
    'driver': probhat
  });
}