json.array!(@projects) do |project|
  json.extract! project, :title, :body
  json.url project_url(project, format: :json)
end