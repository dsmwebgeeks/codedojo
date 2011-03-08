require 'spec_helper'

describe Task do
  context "with valid parameters" do
    before(:each) do
      @task = Task.new(:name => 'Learn Ruby', :description => 'Read PickAxe')
    end

    it "should be valid" do
      @task.should be_valid
    end
  end
end
