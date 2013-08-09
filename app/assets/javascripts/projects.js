if(typeof(document.controllers) === "undefined") { document.controllers = {}; }

document.controllers["projects"] = {
  common: function () {
    console.log("projects/common")
  },
  show: function () {
    console.log("projects/show")
  },
  edit: function () {
    console.log("projects/edit")
  }
}
