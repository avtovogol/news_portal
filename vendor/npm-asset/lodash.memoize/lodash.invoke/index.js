/**
 * lodash 3.0.0 (Custom Build) <https://lodash.com/>
 * Build: `lodash modern modularize exports="npm" -o ./`
 * Copyright 2012-2015 The Dojo Foundation <http://dojofoundation.org/>
 * Based on Underscore.js 1.7.0 <http://underscorejs.org/LICENSE>
 * Copyright 2009-2015 Jeremy Ashkenas, DocumentCloud and Investigative Reporters & Editors
 * Available under MIT license <https://lodash.com/license>
 */
var baseEach = require('lodash._baseeach'),
    baseSlice = require('lodash._baseslice');

/**
 * Used as the maximum length of an array-like value.
 * See the [ES spec](https://people.mozilla.org/~jorendorff/es6-draft.html#sec-number.max_safe_integer)
 * for more details.
 */
var MAX_SAFE_INTEGER = Math.pow(2, 53) - 1;

/**
 * The base implementation of `_.invoke` which requires additional arguments
 * to be provided as an array of arguments rather than individually.
 *
 * @private
 * @param {Array|Object|string} collection The collection to iterate over.
 * @param {Function|string} methodName The name of the method to invoke or
 *  the function invoked per iteration.
 * @param {Array} [args] The arguments to invoke the method with.
 * @returns {Array} Returns the array of results.
 */
function baseInvoke(collection, methodName, args) {
  var index = -1,
      isFunc = typeof methodName == 'function',
      length = collection ? collection.length : 0,
      result = isLength(length) ? Array(length) : [];

  baseEach(collection, function(value) {
    var func = isFunc ? methodName : (value != null && value[methodName]);
    result[++index] = func ? func.apply(value, args) : undefined;
  });
  return result;
}

/**
 * Checks if `value` is a valid array-like length.
 *
 * **Note:** This function is based on ES `ToLength`. See the
 * [ES spec](https://people.mozilla.org/~jorendorff/es6-draft.html#sec-tolength)
 * for more details.
 *
 * @private
 * @param {*} value The value to check.
 * @returns {boolean} Returns `true` if `value` is a valid length, else `false`.
 */
function isLength(value) {
  return typeof value == 'number' && value > -1 && value % 1 == 0 && value <= MAX_SAFE_INTEGER;
}

/**
 * Invokes the method named by `methodName` on each element in `collection`,
 * returning an array of the results of each invoked method. Any additional
 * arguments are provided to each invoked method. If `methodName` is a function
 * it is invoked for, and `this` bound to, each element in `collection`.
 *
 * @static
 * @memberOf _
 * @category Collection
 * @param {Array|Object|string} collection The collection to iterate over.
 * @param {Function|string} methodName The name of the method to invoke or
 *  the function invoked per iteration.
 * @param {...*} [args] The arguments to invoke the method with.
 * @returns {Array} Returns the array of results.
 * @example
 *
 * _.invoke([[5, 1, 7], [3, 2, 1]], 'sort');
 * // => [[1, 5, 7], [1, 2, 3]]
 *
 * _.invoke([123, 456], String.prototype.split, '');
 * // => [['1', '2', '3'], ['4', '5', '6']]
 */
function invoke(collection, methodName) {
  return baseInvoke(collection, methodName, baseSlice(arguments, 2));
}

module.exports = invoke;
