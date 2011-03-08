require 'spec_helper'

describe "todos/edit.html.erb" do
  before(:each) do
    @todo = assign(:todo, stub_model(Todo,
      :description => "MyString",
      :completed => false
    ))
  end

  it "renders the edit todo form" do
    render

    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "form", :action => todos_path(@todo), :method => "post" do
      assert_select "input#todo_description", :name => "todo[description]"
      assert_select "input#todo_completed", :name => "todo[completed]"
    end
  end
end
