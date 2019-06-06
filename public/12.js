(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[12],{

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/views/MembersTable.vue?vue&type=script&lang=js&":
/*!***************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./resources/views/MembersTable.vue?vue&type=script&lang=js& ***!
  \***************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! axios */ "./node_modules/axios/index.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_0__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
  data: function data() {
    return {
      headers: [{
        sortable: false,
        text: 'Name',
        value: 'name'
      }, {
        sortable: false,
        text: 'Country',
        value: 'country'
      }, {
        sortable: false,
        text: 'City',
        value: 'city'
      }, {
        sortable: false,
        text: 'Salary',
        value: 'salary',
        align: 'right'
      }],
      items: []
    };
  },
  mounted: function mounted() {
    var _this = this;

    axios__WEBPACK_IMPORTED_MODULE_0___default.a.get("/api/members").then(function (response) {
      _this.items = response.data;
    });
  }
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/views/MembersTable.vue?vue&type=template&id=390faf0e&":
/*!*******************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/views/MembersTable.vue?vue&type=template&id=390faf0e& ***!
  \*******************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c(
    "v-container",
    { attrs: { "fill-height": "", fluid: "", "grid-list-xl": "" } },
    [
      _c(
        "v-layout",
        { attrs: { "justify-center": "", wrap: "" } },
        [
          _c(
            "v-flex",
            { attrs: { md12: "" } },
            [
              _c(
                "material-card",
                {
                  attrs: {
                    color: "green",
                    title: "Simple Table",
                    text: "Here is a subtitle for this table"
                  }
                },
                [
                  _c("v-data-table", {
                    attrs: {
                      headers: _vm.headers,
                      items: _vm.items,
                      "hide-actions": ""
                    },
                    scopedSlots: _vm._u([
                      {
                        key: "headerCell",
                        fn: function(ref) {
                          var header = ref.header
                          return [
                            _c("span", {
                              staticClass:
                                "subheading font-weight-light text-success text--darken-3",
                              domProps: { textContent: _vm._s(header.text) }
                            })
                          ]
                        }
                      },
                      {
                        key: "items",
                        fn: function(ref) {
                          var item = ref.item
                          return [
                            _c("td", [_vm._v(_vm._s(item.contact))]),
                            _vm._v(" "),
                            _c("td", [_vm._v(_vm._s(item.names))]),
                            _vm._v(" "),
                            _c("td", [_vm._v(_vm._s(item.email))]),
                            _vm._v(" "),
                            _c("td", { staticClass: "text-xs-right" }, [
                              _vm._v(_vm._s(item.dob))
                            ])
                          ]
                        }
                      }
                    ])
                  })
                ],
                1
              )
            ],
            1
          )
        ],
        1
      )
    ],
    1
  )
}
var staticRenderFns = []
render._withStripped = true



/***/ }),

/***/ "./resources/views/MembersTable.vue":
/*!******************************************!*\
  !*** ./resources/views/MembersTable.vue ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _MembersTable_vue_vue_type_template_id_390faf0e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./MembersTable.vue?vue&type=template&id=390faf0e& */ "./resources/views/MembersTable.vue?vue&type=template&id=390faf0e&");
/* harmony import */ var _MembersTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./MembersTable.vue?vue&type=script&lang=js& */ "./resources/views/MembersTable.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _MembersTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _MembersTable_vue_vue_type_template_id_390faf0e___WEBPACK_IMPORTED_MODULE_0__["render"],
  _MembersTable_vue_vue_type_template_id_390faf0e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/views/MembersTable.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/views/MembersTable.vue?vue&type=script&lang=js&":
/*!*******************************************************************!*\
  !*** ./resources/views/MembersTable.vue?vue&type=script&lang=js& ***!
  \*******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_MembersTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/babel-loader/lib??ref--4-0!../../node_modules/vue-loader/lib??vue-loader-options!./MembersTable.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./resources/views/MembersTable.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_MembersTable_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./resources/views/MembersTable.vue?vue&type=template&id=390faf0e&":
/*!*************************************************************************!*\
  !*** ./resources/views/MembersTable.vue?vue&type=template&id=390faf0e& ***!
  \*************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_MembersTable_vue_vue_type_template_id_390faf0e___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../node_modules/vue-loader/lib??vue-loader-options!./MembersTable.vue?vue&type=template&id=390faf0e& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/views/MembersTable.vue?vue&type=template&id=390faf0e&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_MembersTable_vue_vue_type_template_id_390faf0e___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_MembersTable_vue_vue_type_template_id_390faf0e___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);