(self.webpackChunk=self.webpackChunk||[]).push([[245],{3137:(t,n,a)=>{"use strict";a.d(n,{Z:()=>c});var e=a(4015),s=a.n(e),r=a(3645),i=a.n(r)()(s());i.push([t.id,".svg-inline--fa.fa-w-18{width:1.25rem}","",{version:3,sources:["webpack://./resources/js/views/Redirect.vue"],names:[],mappings:"AAoBA,wBACC,aAnBD",sourcesContent:["\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n\r\n.svg-inline--fa.fa-w-18 {\r\n\twidth: 1.25rem;\r\n}\r\n"],sourceRoot:""}]);const c=i},9245:(t,n,a)=>{"use strict";a.r(n),a.d(n,{default:()=>u});var e=a(575),s=a(2443);const r={components:{Footer:e.Z},data:function(){return{laravel:window.laravel}},mounted:function(){document.title="Mengarahkan...",$.post(window.laravel.base_url+"/api/middlewares/checking").then((function(t){setTimeout((function(){t.data?s.Z.push("/".concat(t.data)):(s.Z.push("/"),Swal.fire("Kesalahan!","Anda belum terautentikasi!","warning"))}),2500)}))},methods:{}};var i=a(3379),c=a.n(i),l=a(3137),o={insert:"head",singleton:!1};c()(l.Z,o);l.Z.locals;const u=(0,a(1900).Z)(r,(function(){var t=this,n=t.$createElement,a=t._self._c||n;return a("div",{staticClass:"container"},[a("div",{staticClass:"row min-vh-100 align-items-center justify-content-center"},[a("div",{staticClass:"col-md-5"},[a("div",{staticClass:"card"},[a("div",{staticClass:"card-header bg-white text-center"},[a("img",{staticClass:"img-fluid",attrs:{src:this.laravel.assets+"img/brands/silta-color.svg"}})]),t._v(" "),t._m(0)]),t._v(" "),a("Footer")],1)])])}),[function(){var t=this,n=t.$createElement,a=t._self._c||n;return a("div",{staticClass:"card-body"},[a("h3",{staticClass:"text-center"},[t._v("Mengarahkan")]),t._v(" "),a("p",{staticClass:"text-muted text-center m-0"},[t._v("Tunggu sebentar, kami akan mengarahkan anda!")])])}],!1,null,null,null).exports},575:(t,n,a)=>{"use strict";a.d(n,{Z:()=>e});const e=(0,a(1900).Z)({},(function(){var t=this,n=t.$createElement,a=t._self._c||n;return a("footer",{staticClass:"mt-3 text-center"},[a("span",{staticClass:"copyright"},[t._v("Hak Cipta 2021 - "+t._s(t.moment().format("Y"))+" "),a("a",{attrs:{href:"https://www.dasakreativa.web.id"}},[t._v("Dasa Kreativa Studio")]),t._v(".")])])}),[],!1,null,null,null).exports}}]);
//# sourceMappingURL=245.js.map