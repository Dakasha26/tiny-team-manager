import { connect } from 'react-redux';

import DataGrid, {Column, Editing, Lookup, Paging, Selection} from "devextreme-react/data-grid";
import {Template} from "devextreme-react/core/template";
import React from "react";
import DataRequester from "./DataRequester";
import {Row} from "devextreme-react/responsive-box";
import 'bootstrap/dist/css/bootstrap.min.css';

let data = [];
const dataSource = DataRequester.createDataSource(data, 'BestMembers');


// TODO: зарефакторить
export default class BestMembers extends React.Component {
    constructor(props) {
        super(props);
    }

    render(){
        return (
          <div className={`container`}>
              <h2 className="Table-header">Рейтинг членов</h2>
              <DataGrid id="gridContainer"
                        dataSource={ dataSource }
                        showBorders={true}
                        // selectedRowKeys={this.state.selectedItemKeys}
                        onSelectionChanged={this.selectionChanged}
                        onToolbarPreparing={this.onToolbarPreparing}
                        columnAutoWidth={true} >
                  <Selection mode="multiple" />
                  <Paging enabled={false} />
                  <Editing
                      mode="cell"
                      allowUpdating={false}
                      allowAdding={false}
                      allowDeleting={false} />
                  <Column dataField="id" caption="№" />
                  <Column dataField="firstName" caption="Имя" />
                  <Column dataField="secondName" caption="Фамилия" />
                  {/*<Column dataField="position" caption="Должность" />*/}
                  <Column dataField="points" caption="Число баллов" />
              </DataGrid>
          </div>
        )
    }
}

