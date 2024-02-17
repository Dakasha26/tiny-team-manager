import DataSource from "devextreme/data/data_source";
import axios from "axios";
import {SERVER_URL} from "../../../../constants";

export default class DataRequester {

    static createDataSource(data, reportName) {
        let params = {
            loadMode: 'raw',
            dataSource: data,
            load : function (loadOptions) {
                return axios.get(SERVER_URL + "/work/getReport" + reportName,  ()=> {
                    switch(reportName){
                        case("BestMembers"):
                            return {
                                tableName: reportName
                            }
                        case("GroupActivity"):
                            return {
                                tableName: reportName
                            }
                    }
                })
                .then(res => {
                    return res.data;
                })
                .catch( e => { throw e} );
            }
        }
        return new DataSource(params);
    }
}