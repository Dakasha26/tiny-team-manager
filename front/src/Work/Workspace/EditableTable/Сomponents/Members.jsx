import React, {useState} from 'react';
import { Column } from 'devextreme-react/data-grid';
import DataGridTemplate from "./AdditionalComponents/DataGridTemplate";
import DataRequester from "./DataRequester";


function Members() {
    const [mainData] = useState(DataRequester.createDataSource([], 'members'))
    return (
        <>
            <h2 className="Table-header">Список членов</h2>
            <DataGridTemplate dataSource={mainData} columns={[
                <Column dataField="id" caption="№" allowEditing={false} />,
                <Column dataField="secondName" caption="Фамилия"/>,
                <Column dataField="firstName" caption="Имя"/>,
                <Column dataField="patronymicName" caption="Отчество"/>,
                <Column dataField="hasReestr" caption="Реестр" dataType="boolean"width={70} />,
                <Column dataField="hasApplication" caption="Заявление" dataType="boolean"width={70} />,
                <Column dataField="hasAgreement" caption="Согласие" dataType="boolean" width={70}/>,
                <Column caption='Сканы'>
                    <Column dataField="hasPassportScan" caption="Паспорт" dataType="boolean" width={70}/>
                    <Column dataField="hasSnilsScan" caption="Снилс" dataType="boolean"  width={70}/>
                    <Column dataField="hasPolisScan" caption="Полис" dataType="boolean" width={70}/>
                    <Column dataField="hasInnScan" caption="ИНН" dataType="boolean" width={70}/>
                    <Column dataField="hasPripisnoeScan" caption="Приписное" dataType="boolean" width={70}/>
                </Column>,
                <Column dataField="hasEducationReference" caption="2 справки ВУЗ" dataType="boolean" width={70}/>,
                <Column dataField="hasPhoto" caption="Фото" dataType="boolean" width={70}/>,
                <Column dataField="hasFee" caption="Взнос" dataType="boolean" width={70}/>,
                <Column dataField="hasResult" caption="Результат" dataType="boolean" width={70}/>,
                <Column dataField="comment" caption="Примечание" />
            ]}
            />
        </>
    );
}

export default Members;
