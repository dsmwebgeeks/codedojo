require "spec_helper"

describe TodosController do
  describe "routing" do

    it "recognizes and generates #index" do
      { :get => "/todos" }.should route_to(:controller => "todos", :action => "index")
    end

    it "recognizes and generates #new" do
      { :get => "/todos/new" }.should route_to(:controller => "todos", :action => "new")
    end

    it "recognizes and generates #show" do
      { :get => "/todos/1" }.should route_to(:controller => "todos", :action => "show", :id => "1")
    end

    it "recognizes and generates #edit" do
      { :get => "/todos/1/edit" }.should route_to(:controller => "todos", :action => "edit", :id => "1")
    end

    it "recognizes and generates #create" do
      { :post => "/todos" }.should route_to(:controller => "todos", :action => "create")
    end

    it "recognizes and generates #update" do
      { :put => "/todos/1" }.should route_to(:controller => "todos", :action => "update", :id => "1")
    end

    it "recognizes and generates #destroy" do
      { :delete => "/todos/1" }.should route_to(:controller => "todos", :action => "destroy", :id => "1")
    end

  end
end
