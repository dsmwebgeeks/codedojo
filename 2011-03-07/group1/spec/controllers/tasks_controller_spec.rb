require 'spec_helper'

describe TasksController do

  describe "GET 'index'" do
    it "should be successful" do
      get 'index'
      response.should be_success
    end

    it "should load the tasks" do
      Task.should_receive(:all)
      get 'index'
    end
  end

end
