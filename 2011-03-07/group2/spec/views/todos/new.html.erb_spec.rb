require 'spec_helper'

describe "todos/new.html.erb" do
  before(:each) do
    assign(:todo, stub_model(Todo,
      :description => "MyString",
      :completed => false
    ).as_new_record)
  end

  it "renders new todo form" do
    render

    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "form", :action => todos_path, :method => "post" do
      assert_select "input#todo_description", :name => "todo[description]"
      assert_select "input#todo_completed", :name => "todo[completed]"
    end
  end
end
