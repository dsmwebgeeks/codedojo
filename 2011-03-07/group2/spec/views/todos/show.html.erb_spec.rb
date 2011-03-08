require 'spec_helper'

describe "todos/show.html.erb" do
  before(:each) do
    @todo = assign(:todo, stub_model(Todo,
      :description => "Description",
      :completed => false
    ))
  end

  it "renders attributes in <p>" do
    render
    # Run the generator again with the --webrat flag if you want to use webrat matchers
    rendered.should match(/Description/)
    # Run the generator again with the --webrat flag if you want to use webrat matchers
    rendered.should match(/false/)
  end
end
