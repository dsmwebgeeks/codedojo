require 'spec_helper'

describe "todos/index.html.erb" do
  before(:each) do
    assign(:todos, [
      stub_model(Todo,
        :description => "Description",
        :completed => false
      ),
      stub_model(Todo,
        :description => "Description",
        :completed => false
      )
    ])
  end

  it "renders a list of todos" do
    render
    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "tr>td", :text => "Description".to_s, :count => 2
    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "tr>td", :text => false.to_s, :count => 2
  end
end
