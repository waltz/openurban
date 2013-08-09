class Rails
  constructor: (window) ->
    this.window = window
    this.exec this.current_controller(), this.current_action()
  current_controller: ->
    return this.window.document.body.getAttribute( "data-controller" )
  current_action: ->
    return this.window.document.body.getAttribute( "data-action" )
  controllers: ->
    return this.window.document.controllers
  exec: (controller, action) ->
    list = this.controllers()

    if typeof list[controller] == "object"
      if typeof list[controller]["common"] == "function"
        list[controller]["common"]()
      if typeof list[controller][action] == "function"
        list[controller][action]()

$( document ).ready(() ->
  this.rails = new Rails window
)
