
#Folder Structure
- app 
  -- code 
    -- local
     -- TakeHome
        -- Homework
            -- Block
                -- Adminhtml 'requirement 6,7'
                    -- Sales 
                        -- Grid.php
            -- etc
                -- config.xml
                -- system.xml 'requirement 3'
            -- Helper
                -- Data.php
            -- Model
                -- mysql4
                    -- Observer.php 'requirement 4,5'
                    -- Mysql4
                        -- Setup.php
            -- sql
                -- homework_setup 'requirement 1,2'
                    -- mysql4-install-1.0.0.0.php 
                    -- mysql4-upgrade-1.0.0.0-2.0.0.0.php 
    -- etc
        -- modules
            -- TakeHome_Homework.xml

# Requirement
1. The module should add a new product attribute called "Half-life (seconds)" of type integer to all products
2. The module should add a new column "contains_radioactive_item" to the sales order
3. The threshold for whether an item is “radioactive” should be configurable in System > Configuration
4. The value of "Contains Radioactive Item" on the order should be "1" if any of the items in the order are a product with a half-life value less than the current radioactive threshold setting, otherwise "0"
5. The value of "Contains Radioactive Item" on the order should be determined at order time
6. A yes/no column should be added to the sales order grid in the admin for ContainsRadioactiveItem.
7. The column should be filterable and sortable