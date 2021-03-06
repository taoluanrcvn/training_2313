import {callApi} from "@/utils/axios";
import {API_CONSTANT} from "@/utils/api.constains";
import {Utils} from "@/utils/utils";
export const ServiceCustomer = {
    async getCustomers(params) {
        try {
            const response = await callApi.getRequest(API_CONSTANT.CUSTOMERS, params)
            return response;
        } catch (e) {
            await Utils.checkAuth(e);
            throw e;
        }
    },
    async addCustomer(customer) {
        try {
            const body = new FormData();
            body.append('customer_name', customer.customer_name);
            body.append('email', customer.email)
            body.append('tel_num', customer.tel_num)
            body.append('address', customer.address)
            body.append('is_active', customer.is_active)
            const response = await callApi.postRequest(API_CONSTANT.CUSTOMERS, body);
            return response;
        } catch (e) {
            await Utils.checkAuth(e);
            throw e;
        }
    },

    async updateCustomer(customer) {
        try {
            const body = new FormData();
            body.append('customer_name', customer.customer_name);
            body.append('email', customer.email)
            body.append('tel_num', customer.tel_num)
            body.append('address', customer.address)
            body.append('is_active', customer.is_active)
            const response = await callApi.putRequest(API_CONSTANT.CUSTOMERS  + `${customer.customer_id}` , customer);
            return response;
        } catch (e) {
            await Utils.checkAuth(e);
            throw e;
        }
    },
}